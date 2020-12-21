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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
{{--            <header class="navbar navbar-light bg-light">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

            <!-- Page Content -->
                <div class="flex">
                    <div class="flex-col" style="flex: 1;margin-top: 3em">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin: .1em 1em; background-color: rgba(0,0,0,.03);padding: .2em 2em;border-radius: 2em">
                                <a class="nav-link active" style="color: #1a202c" aria-current="page" href="#"><b>Home</b></a>
                            </li>
                            <li class="nav-item" style="margin: .1em 1em;padding: .2em 2em;border-radius: 2em">
                                <a class="nav-link" href="/users" style="color: #1a202c"><b>Users</b></a>
                            </li>
                            <li class="nav-item" style="margin: .1em 1em;padding: .2em 2em;border-radius: 2em">
                                <a class="nav-link" href="/materials" style="color: #1a202c"><b>Material</b></a>
                            </li>
                            <li class="nav-item" style="margin: .1em 1em;padding: .2em 2em;border-radius: 2em">
                                <a class="nav-link" href="/suppliers" style="color: #1a202c"><b>Suppliers</b></a>
                            </li>
                        </ul>
                    </div>
                    <main style="margin-top: 1em;flex: 4">
                        {{ $slot }}
                    </main>
                </div>

        </div>
    </body>
</html>
