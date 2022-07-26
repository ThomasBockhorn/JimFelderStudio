<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta name = "csrf-token" content = "{{ csrf_token() }}">

    <link
        href = "https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
        rel = "stylesheet"
    />
    <link
        href = "https://fonts.googleapis.com/icon?family=Material+Icons"
        rel = "stylesheet"
    />
    <link
        rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity = "sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin = "anonymous" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel = "stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class = "bg-gray-100">
@include('includes.header.header')
<main class = "snap-y snap-mandatory">
    @yield('content')
</main>
@include('includes.footer.footer')

<!-- from cdn -->
<script src = "https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
</body>
</html>
