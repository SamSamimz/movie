<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    @include('partials.navbar')
    @yield('content')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @livewireScripts
</body>
</html>