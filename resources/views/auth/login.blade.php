<x-guest-layout>

    <section class="min-h-screen bg-[#404040] flex flex-col">

        <div class="flex items-start justify-start px-8 py-8">
            <x-application-logo-login class="block h-9 w-auto " />
        </div> 

        <div class="px-28 py-10">
            <h1 class="text-white font-bold text-4xl font-inter">BIENVENIDO</h1>
        </div>


        <div class="w-full px-40">
            <div class="max-w-md w-full">
                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}" class="p-8 rounded-lg">
                    @csrf

                    <div>
                        <x-label class="text-white font-bold" for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label class="text-white font-bold" for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button style="background-color: #8AB469;">
                            {{ __('Iniciar sesión') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

        <a href="auth/google/redirect" class="inline-block rounded-full w-12 h-12 p-2 bg-gray-200 mt-4">
            <img src="../assets/images/google.jpg" alt="" class="w-8 h-8 mx-auto" />
        </a>

        <div class=" flex justify-end items-center h-full ">
            <img src="../assets/images/tigre_login.png" alt="" class="w-1/3 h-auto self-center absolute top-1/2 transform -translate-y-1/2">
        </div>
        
    </section>

</x-guest-layout>