<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
  x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
  x-bind:class="{ 'dark': darkMode }" 
  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <script>
          if (localStorage.getItem('dark') == 'true') {
            document.documentElement.classList.add('dark')
          }else{
            document.documentElement.classList.remove('dark')
          }
        </script>
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

        <div>
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white antialiased">
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
        <script src="{{ mix('js/sweetalert.min.js') }}" defer></script>
        <script>
          window.addEventListener('swal:modal', event => {
            swal({
              title: event.detail.title,
              text: event.detail.text,
              icon: event.detail.type,
            })
          });

          window.addEventListener('swal:confirm', event => {
            swal({
              title: event.detail.title,
              text: event.detail.text,
              icon: event.detail.type,
              buttons: true, 
              dangerMode: true,
            })

            .then((willDelete) => {
              if(willDelete) {
                window.livewire.emit('delete', event.detail.id);
              }
            });
          });
        </script>
        @stack('scripts')
    </body>
</html>
