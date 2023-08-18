<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="flex justify-center">
            <div class="max-w-4xl px-6 pt-2 mb-4 rounded-xl">
    
                <div class="flex justify-center mt-4 ">
    
                    <a href="https://admin.appana.cl/login-google">
                        <button class="font-bold py-2 px-4 rounded bg-blue-500 text-white w-full items-center flex justify-items-center mr-2 mt-2"><svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>Ingresar Con Google<div></div></button>
                    </a>
                
                </div>
             
            </div>
        </div>

        <h1 class="text-center text-white text-3xl my-5 px-4 font-serif">Acceso Proveedores</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="my-6  px-6">
                <x-jet-label for="user" value="{{ __('Email o Usuario') }}" class="text-white text-center text-lg my-2" />
                <x-jet-input id="user" class="block mt-1 w-full" type="text" name="user" :value="old('user')" required autofocus />
            </div>

            <div class="mt-4 my-6  px-6">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" class="text-white text-center text-lg my-2" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            {{--
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center text-white">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>
            --}}
            <div class="flex justify-center">
                <x-jet-button class="text-white">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
            
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                  <a class="hidden underline text-sm text-white hover:text-gray-400  mr-auto" href="{{ route('register') }}">
                    {{ __('Registrarme') }}
                    </a>
                    <a class="underline text-sm text-white hover:text-gray-400" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu clave?') }}
                    </a>
                @endif

                
            </div>
           
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
