<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.partials.header')

    <main>
        <form action="" method="POST" class="login-form">

    @csrf

    <h2 class="login-title">Inscription</h2>

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"
            placeholder="Entrer votre nom" required>
    </div>
    
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email"
        placeholder="exemple@mail.com" required>
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password"
        placeholder="••••••••" required>
    </div>

    <div class="connexion">
    <button type="submit" name="connecter">Soumettre</button>
    </div>

    <div class="liens">
    <a href="{{ route('login') }}" class="mdp">
        Se connecter à un compte ?
    </a>
</div>

</form>
    </main>
</body>
</html>

