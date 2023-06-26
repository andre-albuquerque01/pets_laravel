<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- first_name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('name')"
                required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- last_name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Sobrenome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('name')"
                required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- last_name -->
        <div class="mt-4">
            <div class="flex">
                <x-input-label for="DDD" :value="__('DDD')" />
                <div class="ml-7">
                    <x-input-label for="number" :value="__('Número')" />
                </div>
            </div>
            <div class="flex">
                <x-text-input id="DDD" class="block mt-1 w-12" type="number" name="ddd" :value="old('ddd')"
                    required autofocus autocomplete="DDD" />
                <x-input-error :messages="$errors->get('ddd')" class="mt-2" />

                <x-text-input id="number" class="block mt-1 ml-2 w-full" type="number" name="number" :value="old('number')"
                    required autofocus autocomplete="number" />
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- term of concience -->
        <div class="flex mt-4">
            <x-text-input id="term_of_concience" class="block mt-1" type="checkbox" name="term_of_concience" required
                autocomplete="new-password" />

            <a class="mt-1 px-2 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}" id="term_of_concience" target="_blank">
                {{ __('Termo de conciencia') }}
            </a>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}" required>
                {{ __('Já tem registro?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Resgistrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
