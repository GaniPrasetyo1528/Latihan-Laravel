<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman {{ $title }}</title>
</head>
<body>
    Selamat datang di halaman {{ $title }}
    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
    <p><a href="{{ route('about') }}">Lihat About</a></p>
</body>
</html>