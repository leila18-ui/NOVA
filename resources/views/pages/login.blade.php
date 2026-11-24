<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @include('layouts.partials.header')
     <.main>
<form action="" method="POST" class="login-form">

    @csrf

    <h2 class="login-title">Connexion</h2>

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
    @error('email')
    <p style="color: red;">{{ $message }}</p>
@enderror

@error('password')
    <p style="color: red;">{{ $message }}</p>
@enderror

@if (session('message'))
    <p style="color: red;">
        {{ session('message') }}
    </p>
@endif

<div class="souvenir">
    <label>
        <input type="checkbox" name="souvenir">
        <span>Se souvenir de moi</span>
    </label>
</div>

<div class="connexion">
    <button type="submit" name="connecter">Se connecter</button>
</div>

<div class="liens">
    <a href="#" class="mdp">Mot de passe oublié ?</a>

    <a href="{{ route('register') }}" class="comp">
        Créer un compte
    </a>
</div>

</form>
</main>
</body>
</html>