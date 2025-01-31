<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex items-center justify-center mt-6 mb-8">
        <a href="/">

            <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
        </a>
    </div>

    <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="text-green-600 border-gray-300 rounded shadow-sm focus:ring-green-500" name="remember">
                <span class="text-sm ms-2 text-black-600"
                    style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 200; font-size: 14px;">{{
                    __('Remember me') }}</span>
            </label>
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3 g-recaptcha"
        data-sitekey="{{ config('services.recaptcha.site_key') }}"
        data-callback='onSubmit'
        data-action='login'>
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-4 ">
            <a  href="{{route('auth.google')}}" class="'inline-flex items-center px-4 py-2 bg-white border
    border-red-50 rounded-md font-semibold text-xs text-red-700 capitalize tracking-widest  hover:bg-gray-100
    focus:outline-none focus:ring-1 focus:ring-green-500 focus:ring-offset-1 disabled:opacity-25 transition ease-in-out
    duration-150'">
                Sign In With Google
            </a>
        </div>
        <div class="flex items-center justify-between mt-8">
            <a class="text-sm underline rounded-md text-black-500 hover:text-black-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 200; font-size: 14px;"
                href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
            @if (Route::has('password.request'))
            <a class="text-sm underline rounded-md text-black-500 hover:text-black-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 200; font-size: 14px;"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
    </form>
    @push('log_scripts')
     <script>
   function onSubmit(token) {
     document.getElementById("loginForm").submit();
   }
    </script>
    @endpush
</x-guest-layout>
