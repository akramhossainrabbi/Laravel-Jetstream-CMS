<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @yield('css')

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <!-- component -->
        <style>
            /* Custom style */
            .header-right {
                width: calc(100% - 3.5rem);
            }
            .sidebar:hover {
                width: 16rem;
            }
            @media only screen and (min-width: 768px) {
                .header-right {
                    width: calc(100% - 16rem);
                }        
            }
        </style>

        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
                @livewire('navigation-menu')

                <!-- Page Heading -->
                {{-- @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif --}}
    
                <!-- Page Content -->
                <main class="h-full ml-14 mt-14 mb-10 md:ml-64 dark:text-gray-50">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script>
          const setup = () => {
            const getTheme = () => {
              if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
              }
              return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }
      
            const setTheme = (value) => {
              window.localStorage.setItem('dark', value)
            }
      
            return {
              loading: true,
              isDark: getTheme(),
              toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
              },
            }
          }
        </script>
        @stack('scripts')
    </body>
</html>
