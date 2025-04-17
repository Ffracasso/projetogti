@vite(['resources/css/app.css','resources/js/app.js'])

<form action="{{route('salva-conta')}}" method="POST" class="space-y-8">
    @csrf

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .auth-links {
            margin-top: 20px;
        }
        .auth-links a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .auth-links a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao site</h1>
    <p>Site placeholder para login e criação de conta</p>

    <div class="auth-links">
        <a href="login">Login</a>
        <a href="criar-conta">Criar Conta</a>
    </div>
</body>
</html>
