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
    @stack('styles')
</head>

<body>
    <x-admin-sidebar></x-admin-sidebar>
    <x-admin-app-bar>
        <x-slot:before>@yield('before')</x-slot:before>
        <x-slot:before_link>@yield('before_link')</x-slot:before_link>
        <x-slot:after>@yield('after')</x-slot:after>
        <x-slot:after_link>@yield('after_link')</x-slot:after_link>
    </x-admin-app-bar>
    <main class="main-admin">
        @yield('main')
    </main>
    <script>
        // const originalContent = document.body.innerHTML;
        // window.addEventListener('resize', () => {
        //     if (window.innerWidth < 768) {
        //         document.body.innerHTML = 'no'
        //     }
        //     else {
        //         document.body.innerHTML = originalContent;
        //     }
        // });
        // document.addEventListener('DOMContentLoaded', () => {
        //     if (window.innerWidth < 768) {
        //         document.body.innerHTML = 'no'
        //     }
        //     else {
        //         document.body.innerHTML = originalContent;
        //     }
        // });
    </script>
    @stack('scripts')
</body>

</html>
