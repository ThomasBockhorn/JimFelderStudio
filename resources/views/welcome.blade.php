<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased m-0 p-0">
        <header class="flex flex-col content-center justify-center mt-2">
            <div class="logo m-auto">
                <img class="w-auto" src="{{ url('/storage/images/FelderStudioLogo.png') }}" alt="FelderStudio logo">
            </div>
            <h2 class="text-center">Artist</h2>
            <nav class="m-auto">
                <ul class="flex place-content-between w-auto">
                    <li>Home</li>
                    <li>Biography</li>
                    <li>Gallery</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </header>
        <main>

        </main>
    </body>
</html>
