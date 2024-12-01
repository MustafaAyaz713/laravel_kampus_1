<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .dashboard {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
        .username {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            margin: 0.5rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            font-size: 1rem;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .button-logout {
            background-color: #dc3545;
        }
        .button-logout:hover {
            background-color: #b02a37;
        }
        .interactive-container {
            margin-top: 2rem;
        }
        .card {
            display: inline-block;
            width: 150px;
            height: 150px;
            margin: 1rem;
            padding: 1rem;
            border-radius: 10px;
            background: #007bff;
            color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .card i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Hoşgeldiniz!</h1>
        <p class="username">Merhaba, <strong>{{ Auth::user()->name }}</strong>!</p>

        <a href="#" class="button">Profilinizi Güncelle</a>
        <a href="#" class="button">Bildirimler</a>
        <a href="{{ route('logout') }}" class="button button-logout">Çıkış</a>

        <div class="interactive-container">
            <div class="card">
                <i class="fas fa-user"></i>
                <p>Profil</p>
            </div>
            <div class="card">
                <i class="fas fa-cog"></i>
                <p>Ayarlar</p>
            </div>
            <div class="card">
                <i class="fas fa-bell"></i>
                <p>Bildirimler</p>
            </div>
        </div>
    </div>
</body>
</html>
