@php
    $page_active = "cart";
@endphp

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon panier - NovaBooks</title>

    <script src="{{ asset('js/panier.js') }}" defer></script>
    <script src="{{ asset('js/cart.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
<body>

    @include('layouts.partials.header')

    <main>
        <section class="mon-panier">
        <h2>Mon panier</h2>
        <div id="liste-panier">

        </div>
        <div id="recapitulatif" class="recapitulatif" style="display: none;">

    <h2>Récapitulatif</h2>

    <div class="recap-ligne">
        <span>Sous-total</span>
        <span id="sous-total">0 FCFA</span>
    </div>

    <div class="recap-ligne">
        <span>Livraison</span>
        <span id="livraison">2 000 FCFA</span>
    </div>

    <div class="recap-ligne recap-total">
        <span>Total</span>
        <span id="total">0 FCFA</span>
    </div>

   
</div>

 <button class="btn-primaire" onclick="allerAuCheckout()">
    Passer commande →
    </button>

    <a href="{{ route('books.index') }}" class="btn-secondaire">
    ← Continuer mes achats
    </a>

        </section>
    </main>

</body>
</html>