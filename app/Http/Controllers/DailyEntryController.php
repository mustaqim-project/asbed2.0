<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaloriMakanan;
use App\Models\DailyEntry;
use App\Models\UserWeight;
use Illuminate\Support\Facades\Auth;
use Detection\MobileDetect;

class DailyEntryController extends Controller
{
    public function create()
    {


        $detect = new MobileDetect();

        if ($detect->isMobile()) {
            return view('mobile.frontend.assesment.index');
        } elseif ($detect->isTablet()) {
            return view('mobile.frontend.assesment.index');
        } else {
            return view('desktop.frontend.home-components.home');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'weight' => 'required|integer',
            'question_1' => 'required|boolean',
            'question_2' => 'required_if:question_1,1|boolean',
            'question_3' => 'required_if:question_1,1|in:Tidak pernah atau jarang,Kadang-kadang,Sering,Selalu',
            'question_4' => 'required_if:question_1,1|in:Tidak pernah atau jarang,Kadang-kadang,Sering,Selalu',
            'question_5' => 'required_if:question_1,1|in:Tidak pernah atau jarang,Kadang-kadang,Sering,Selalu',
            'question_6' => 'required_if:question_1,1|in:Tidak pernah atau jarang,Kadang-kadang,Sering,Selalu',
            'question_7' => 'required_if:question_1,1|in:Tidak pernah atau jarang,Kadang-kadang,Sering,Selalu',
        ]);

        $user = Auth::user();

        UserWeight::create([
            'user_id' => $user->id,
            'date' => now()->format('Y-m-d'),
            'weight' => $request->input('weight'),
        ]);

        DailyEntry::create([
            'user_id' => $user->id,
            'date' => now()->format('Y-m-d'),
            'question_1' => $request->input('question_1'),
            'question_2' => $request->input('question_2'),
            'question_3' => $request->input('question_3'),
            'question_4' => $request->input('question_4'),
            'question_5' => $request->input('question_5'),
            'question_6' => $request->input('question_6'),
            'question_7' => $request->input('question_7'),
        ]);

        $interpretResult = $this->interpretResult($request);

        $calculationResult = $this->calculate($request);

        $result = array_merge(['result' => $interpretResult], $calculationResult);

        return view('mobile.frontend.assesment.result', $result);
    }

    private function interpretResult(Request $request)
    {
        if ($request->input('question_1') == 0) {
            return 'Tidak berisiko BED';
        }

        if ($request->input('question_2') == 1) {
            $answers = [
                $request->input('question_3'),
                $request->input('question_4'),
                $request->input('question_5'),
                $request->input('question_6'),
            ];

            if (in_array('Sering', $answers) || in_array('Selalu', $answers)) {
                if ($request->input('question_7') == 'Tidak pernah atau jarang') {
                    return 'Mengalami BED';
                }
            }

            if (in_array('Kadang-kadang', $answers) || in_array('Tidak pernah atau jarang', $answers)) {
                if ($request->input('question_7') == 'Tidak pernah atau jarang') {
                    return 'Beresiko BED';
                }
            }
        }

        return 'Tidak berisiko BED';
    }

    private function calculate(Request $request)
    {
        $user = auth()->user();

        $heightInMeters = $user->tinggi_badan / 100;
        $weightInKg = $request->input('weight');
        $age = \Carbon\Carbon::parse($user->tanggal_lahir)->age;

        // Perhitungan BMI
        $bmi = $weightInKg / ($heightInMeters * $heightInMeters);

        // Perhitungan BMR menggunakan persamaan Harris-Benedict
        if ($user->jenis_kelamin === 'L') {
            $bmrBase = 88.362 + (13.397 * $weightInKg) + (4.799 * $user->tinggi_badan) - (5.677 * $age);
        } else {
            $bmrBase = 447.593 + (9.247 * $weightInKg) + (3.098 * $user->tinggi_badan) - (4.330 * $age);
        }

        // Perhitungan TDEE
        $activityFactor = $request->input('activity_level', 1.2); // default to sedentary
        $bmrCorrected = $bmrBase * $activityFactor;

        // Rekomendasi kalori dari tabel KaloriMakanan
        $recommendedCalories = KaloriMakanan::where('kalori_per_gram', '<=', $bmrCorrected)->get();

        return [
            'bb' => $request->input('weight'),
            'bmi' => $bmi,
            'bmrBase' => round($bmrBase),
            'bmrCorrected' => round($bmrCorrected),
            'totalCaloriesRounded' => round($bmrCorrected),
            'bbIdeal' => $this->calculateIdealBodyWeight($user->tinggi_badan),
            // 'recommendedCalories' => $recommendedCalories
        ];
    }

    private function calculateIdealBodyWeight($height)
    {
        // Rumus perhitungan berat badan ideal (Broca's formula, sebagai contoh):
        return ($height - 100) - (($height - 100) * 0.1);
    }
}
