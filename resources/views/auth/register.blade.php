<x-guest-layout>

    <div class="flex items-center justify-center mt-6 mb-8">
        <a href="/">
            <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
        </a>
    </div>
    <form method="POST" action="{{ route('register') }}" id="registerForm">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex items-center justify-center mt-6" >
            <x-primary-button class="g-recaptcha ms-4 "
        data-sitekey="{{ config('services.recaptcha.site_key') }}"
        data-callback='onSubmit'
        data-action='register' >
                {{ __('Register') }}
            </x-primary-button>
        </div>

        {{-- <div>
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm underline rounded-md text-black-500 hover:text-black-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 200; font-size: 16px;" href=" /">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
    @push('scripts')
         <script>
   function onSubmit(token) {
     document.getElementById("registerForm").submit();
   }
 </script>
    @endpush
</x-guest-layout>
