<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman {{ $title }}</title>
</head>
<body>
    Selamat datang {{ $data['name'] }} di halaman {{ $title }}
    <p>Email anda {{ $data['email'] }}</p>
    <p><a href="{{ route('home') }}">Kembali ke Home</a></p>
    <p><a href="{{ route('blog') }}">Lihat Blog</a></p>
</body>
</html>