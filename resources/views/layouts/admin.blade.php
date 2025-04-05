<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #f6f6f6;
        }
    </style>
</head>
<body>
    <x-admin-sidebar></x-admin-sidebar>
    <x-admin-app-bar>
        <x-slot:before>@yield('before')</x-slot:before>
        <x-slot:after>@yield('after')</x-slot:after>
    </x-admin-app-bar>
    <main class="main-admin">
        @yield('main')
    </main>
</body>
</html>