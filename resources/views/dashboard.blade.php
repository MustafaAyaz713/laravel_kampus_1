<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Hoşgeldiniz!</h1>

    <!-- Kullanıcının veritabanındaki "name" alanı -->
    <p>Hello, <strong>{{ Auth::user()->name }}</strong>!</p>

    <!-- Çıkış bağlantısı -->
    <a href="{{ route('logout') }}">Çıkış</a>
</body>
</html>
