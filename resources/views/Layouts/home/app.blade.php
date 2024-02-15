<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shopper eCommerce Template by TailGrids</title>
        <link rel="icon" href="favicon.png">
        <link href="tailwind.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    </head>

    <body class="dark:bg-dark">

        @include('layouts.home.header')

        <main>
            @yield('contents')
        </main>

        @include('layouts.home.footer')

    </body>
