<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman {{ $title }}</title>
</head>
<body>
    Selamat datang di halaman {{ $title }}
    <p><a href="{{ route('about') }}">Lihat About</a></p>
    <p><a href="{{ route('blog') }}">Lihat Blog</a></p>
    <script src="js/script.js"></script>
</body>
</html>