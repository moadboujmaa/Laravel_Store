<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <img src="images/logo.png" alt="logo" class="w-[350px]">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 border-2 rounded-md shadow-sm w-96 border-gary-800 focus:border-orange-500" placeholder="example@gmail.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <input id="password" class="block mt-1 border-2 rounded-md shadow-sm w-96 border-gary-800 focus:border-orange-500"
            type="password"
            name="password"
            required autocomplete="current-password" placeholder="********">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <div class="mt-4">
            {{-- <x-primary-button class="block p-3 mt-3 text-center w-96">
                {{ __('Log in') }}
            </x-primary-button> --}}
            <button type="submit" class="block p-2 my-5 font-semibold text-center text-white duration-75 bg-orange-500 rounded-md w-96 hover:bg-orange-600">
                Log In
            </button>
            
            @if (Route::has('password.request'))
                <a class="block text-sm text-center text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                <br>
        </div>
    </form>
</x-guest-layout>
