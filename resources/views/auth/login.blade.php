<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="https://scontent-sin6-1.xx.fbcdn.net/v/t31.18172-8/13112980_1023379507743565_1840081445586071543_o.jpg?_nc_cat=111&ccb=1-7&_nc_sid=9267fe&_nc_ohc=5nYeIBgv1aMAX_nkW78&_nc_oc=AQmgFG1FBl_Opr9uvYXc4qnDxfU46HF52Jj1BC5Z3mYRlJ7bRjVSdmXuiStWBSrlYVM&_nc_ht=scontent-sin6-1.xx&oh=00_AT-RVAzkevtje_ofIKJsAaHYn8U1m-G4A15O0yNNsMcbhg&oe=631574B6" style="border-radius: 50%; height: 220px;width: 300px;" class="css-class" alt="alt text">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
