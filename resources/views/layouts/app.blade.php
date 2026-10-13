<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
</head>
<body>
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>
</body>
</html>