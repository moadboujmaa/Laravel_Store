<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <img src="images/logo.png" alt="logo" class="w-[350px]">

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <input id="name" type="name" name="name" :value="old('name')" required autofocus autocomplete="username" class="block mt-1 border-2 rounded-md p-2 w-96 border-gary-800 focus:border-orange-500">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 border-2 rounded-md w-96 border-gary-900 focus:border-orange-500" placeholder="example@gmail.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- Profile Picture -->
        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Profile Picture')" />
            <input 
                id="avatar" 
                type="file" 
                name="avatar" 
                :value="old('avatar')" 
                requiredtype="file" 
                name="avatar" 
                class="block mt-1 border-2 rounded-md w-96 border-gary-900 focus:border-orange-500 file:p-3 file:border-none file:bg-orange-500 file:text-white text-gray-500">
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <input id="password" type="password" name="password" :value="old('password')" required autofocus autocomplete="username" class="block mt-1 border-2 rounded-md shadow-sm w-96 border-gary-800 focus:border-orange-500" >
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <input id="password_confirmation" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus autocomplete="username" class="block mt-1 border-2 rounded-md shadow-sm w-96 border-gary-800 focus:border-orange-500 p-2">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 text-center" >
            
            <button type="submit" class="block  p-2 my-5 font-semibold text-center text-white duration-75 bg-orange-500 rounded-md w-96 hover:bg-orange-600">
                Register
            </button>
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
