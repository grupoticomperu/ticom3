<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

       {{--  <title>{{ config('app.name', 'laravel') }}</title> --}}

        <title>@yield('title', 'TICOM el Portal Empresarial')</title>

        <META name="title" content="@yield('meta-title','Diseño de Páginas web, Desarrollo de páginas web') ">
        <META charset="utf-8" name="description" content="@yield('meta-description','Este es el Blog de TICOM')">
        <META name="keywords" content="@yield('keywords','Diseño de Páginas web, Desarrollo de páginas web')">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="/css/style2.css">


          {{-- FlexSlider --}}
          <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">

        {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

       {{--  <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> --}}

        @stack('css')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="icon" href="{{ asset('img/ticom.ico') }}">

        @livewireStyles


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        {{-- FlexSlider --}}
        <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>



        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="mt-6 text-center bg-blue-900">
                <hr>
                <h3 class="p-2 text-white">TICOM el Portal Empresarial</h3>
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
        @stack('scripts')

        <script>

            livewire.on('alert', function(message){
                Swal.fire(
                    ' EL PORTAL EMPRESARIAL TICOM  ',
                    message,
                    'success'
                    )
            })


        </script>


    </body>

</html>
