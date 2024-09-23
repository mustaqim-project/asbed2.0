<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaloriMakanan;

class HealthController extends Controller
{
    public function calculate(Request $request)
    {
        $user = auth()->user();

        $heightInMeters = $user->tinggi_badan / 100;
        $weightInKg = $user->berat_badan;
        $age = \Carbon\Carbon::parse($user->tanggal_lahir)->age;

        // BMI Calculation
        $bmi = $weightInKg / ($heightInMeters * $heightInMeters);

        // BMR Calculation using Harris-Benedict equation
        if ($user->jenis_kelamin === 'Pria') {
            $bmr = 88.362 + (13.397 * $weightInKg) + (4.799 * $user->tinggi_badan) - (5.677 * $age);
        } else {
            $bmr = 447.593 + (9.247 * $weightInKg) + (3.098 * $user->tinggi_badan) - (4.330 * $age);
        }

        // TDEE Calculation
        $activityFactor = $request->input('activity_level', 1.2); // default to sedentary
        $tdee = $bmr * $activityFactor;

        // Get Recommended Calorie Intake from KaloriMakanan table
        $recommendedCalories = KaloriMakanan::where('kalori_per_gram', '<=', $tdee)->get();

        return view('health.result', compact('bmi', 'bmr', 'tdee', 'recommendedCalories'));
    }
}
