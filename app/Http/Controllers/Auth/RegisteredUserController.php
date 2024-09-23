<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Detection\MobileDetect;
use App\Models\aktifitas\aktifitas;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        $aktifitas = aktifitas::all()->pluck('nama', 'id');

        $detect = new MobileDetect();

        if ($detect->isMobile()) {
        return view('mobile.auth.register', compact('aktifitas'));
        } elseif ($detect->isTablet()) {
            return view('mobile.auth.register', compact('aktifitas'));
        } else {
            return view('desktop.auth.register', compact('aktifitas'));
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'tanggal_lahir' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'jenis_kelamin' => 'required|in:L,P',
            'aktifitas_id' => 'nullable|integer',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('profile_picture')) {
            $gambar = $request->file('profile_picture');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('profile/upload');
            $gambar->move($destinationPath, $gambarName);
            $gambarPath = 'profile/upload/' . $gambarName;
        }




        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'aktifitas_id' => $request->aktifitas_id,
            'password' => Hash::make($request->password),
            'gambar' => $gambarPath,
            'role' => 'user',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
