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
        .desktop-only {
            background-color: #1a202c;
            overflow: hidden;
            width: 100%;
            height: 100dvh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .desktop-only p {
            font-family: 'Consolas';
            color: rgba(160, 174, 192, 1);
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: .05em;
            display: flex;
            letter-spacing: 4px;
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
        const originalContent = document.body.innerHTML;
        window.addEventListener('resize', () => {
            if (window.innerWidth < 1648) {
                document.body.innerHTML = '<div class="desktop-only"><p>DESKTOP ONLY</p></div>'
            }
            else {
                document.body.innerHTML = originalContent;
            }
        });
        document.addEventListener('DOMContentLoaded', () => {
            if (window.innerWidth < 1648) {
                document.body.innerHTML = '<div class="desktop-only"><p>DESKTOP ONLY</p></div>'
            }
            else {
                document.body.innerHTML = originalContent;
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
