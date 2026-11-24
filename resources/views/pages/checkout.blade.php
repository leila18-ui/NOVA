<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/panier.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.partials.header')

    <main>
        <section class="form">

    <form id="checkout-form" action="" method="POST">

        @csrf
        <fieldset class="info">

    <legend>Informations personnelles</legend>

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom"
           placeholder="Entrez votre nom" required>

    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom"
           placeholder="Entrez votre prénom" required>

    <label for="tel">Téléphone</label>
    <input type="tel" id="tel" name="tel"
           placeholder="Entrez votre numéro" required>

    <label for="mail">Email</label>
    <input type="email" id="mail" name="mail"
           placeholder="Entrez votre email" required>

</fieldset>

<fieldset class="livraison">

    <legend>Adresse de livraison</legend>

    <label for="adresse">Adresse</label>
    <input type="text" id="adresse" name="adresse"
           placeholder="Entrez votre adresse" required>

    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville"
           placeholder="Entrez votre ville" required>

</fieldset>

<button type="submit" class="btn-valider">
    Valider la commande
</button>

    </form>

</section>
    </main>
</body>
</html>