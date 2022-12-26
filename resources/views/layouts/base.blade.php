<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @livewireStyles
    </head>

    <body class="bg-slate-600">
      <nav class="flex m-6 ml-12 ">
        <div class="w-64 mr-auto justify-between text-slate-200"> 
          <a href="/">home</a> | <a href="/register">register</a> | <a href="/form-elements">form elements</a> 
        </div>
      </nav>
        @yield('body')

        @livewireScripts
    </body>
</html>
