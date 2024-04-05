<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
-->
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('fontawesome-free-5.15.4-web/css/all.min.css')}}">
        @livewireStyles
        @yield('css')
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @if(Route::currentRouteName() == 'dashboard' && auth()->user()->dashboard)
            
            @else
                @livewire('navigation-menu')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
                        
            <script>
                function dropdownFunction(element) {
                 var dropdowns = document.getElementsByClassName("dropdown-content");
                 var i;
                 let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                 list.classList.add("target");
                 for (i = 0; i < dropdowns.length; i++) {
                     if (!dropdowns[i].classList.contains("target")) {
                         dropdowns[i].classList.add("hidden");
                     }
                 }
                 list.classList.toggle("hidden");
             }</script>
 
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)

            {{$js}}

        @endisset

        
            @if(Route::currentRouteName() == 'dashboard' && auth()->user()->dashboard)
            
            @else
                <footer class="w-full text-gray-700 bg-gray-300 body-font">
                    <div
                        class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
                        <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                            <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                                <x-jet-application-mark class="block h-9 w-auto" />
                            </a>
                            
                            <p class="mt-2 text-sm text-gray-500">Design, Code and Ship!</p>
                            <div class="mt-4">
                                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                                    <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            class="w-5 h-5" viewBox="0 0 24 24">
                                            <path
                                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path stroke="none"
                                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                            </path>
                                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                                <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                                <nav class="mb-10 list-none">
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Company</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Careers</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                                    </li>
                                </nav>
                            </div>
                            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                                <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Support</h2>
                                <nav class="mb-10 list-none">
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact Support</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Help Resources</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Release Updates</a>
                                    </li>
                                </nav>
                            </div>
                            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                                <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Platform
                                </h2>
                                <nav class="mb-10 list-none">
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                                    </li>
                                </nav>
                            </div>
                            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                                <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                                <nav class="mb-10 list-none">
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Send a Message</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Request a Quote</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">+123-456-7890</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-300">
                        <div class="container px-5 py-4 mx-auto">
                            <p class="text-sm text-gray-700 capitalize xl:text-center">© 2020 All rights reserved </p>
                        </div>
                    </div>
                </footer>
            @endif
  
    </body>
</html>
