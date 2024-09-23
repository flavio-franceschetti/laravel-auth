<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    <title>{{ config('app.name', 'Laravel') }} | Admin</title>
</head>

<body>

    @include('admin.partials.header')
    @include('admin.partials.aside')

    @yield('content')

</body>

</html>
