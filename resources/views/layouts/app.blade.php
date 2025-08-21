<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ascend Stratus</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|montserrat:700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'neutral-900': '#1a1a1a',
                        'neutral-700': '#4a4a4a',
                        'neutral-200': '#f5f5f5',
                        'accent': '#00d084',
                        'white': '#ffffff',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #4a4a4a;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            color: #1a1a1a;
        }
    </style>
</head>
<body class="bg-white">
    <div id="app">
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
