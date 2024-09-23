<x-guest-layout>

    <!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Tanggal Lahir -->
        <div class="mt-4">
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="text" name="tanggal_lahir" :value="old('tanggal_lahir')" required autocomplete="bday" placeholder="dd-mm-yyyy" />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div>

        <!-- Tinggi Badan -->
        <div class="mt-4">
            <x-input-label for="tinggi_badan" :value="__('Tinggi Badan (cm)')" />
            <x-text-input id="tinggi_badan" class="block mt-1 w-full" type="number" name="tinggi_badan" :value="old('tinggi_badan')" required autocomplete="height" />
            <x-input-error :messages="$errors->get('tinggi_badan')" class="mt-2" />
        </div>

        <!-- Berat Badan -->
        <div class="mt-4">
            <x-input-label for="berat_badan" :value="__('Berat Badan (kg)')" />
            <x-text-input id="berat_badan" class="block mt-1 w-full" type="number" name="berat_badan" :value="old('berat_badan')" required autocomplete="weight" />
            <x-input-error :messages="$errors->get('berat_badan')" class="mt-2" />
        </div>

        <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
            <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full" required>
                <option value="L">{{ __('Laki-laki') }}</option>
                <option value="P">{{ __('Perempuan') }}</option>
            </select>
            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
         document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#tanggal_lahir", {
                dateFormat: "d-m-Y",  // Format dd-mm-yyyy
                altInput: true,       // Show formatted date in input
                altFormat: "d-m-Y",   // Display format
                allowInput: true      // Allow manual input
            });
        });
    </script>
</x-guest-layout>
