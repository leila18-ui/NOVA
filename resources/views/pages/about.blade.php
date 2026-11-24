<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        @include('layouts.partials.header')

    <section class="about-header">
    <h1>À propos de NovaBooks</h1>
    <p>Votre destination pour les histoires qui bouleversent</p>
    </section>


    <section class="presentation">

    <div class="presentation-image">
        <img src="{{ asset('image/Charleston Bookstore (King Street).jpeg') }}"
             alt="Librairie NovaBooks">
    </div>

    <div class="presentation-texte">
        <h2>Qui sommes-nous ?</h2>

        <p>
            NovaBooks est une librairie en ligne née de la passion pour les histoires intenses et captivantes. Nous croyons que chaque livre est une porte vers un nouvel univers, une aventure qui change celui qui la vit.
        </p>

        <p>
            Fondée en 2024, NovaBooks s'est donné pour mission de rendre accessible les romans les plus captivants du moment : Dark Romance, Thriller psychologique, Fantasy épique... Nous sélectionnons minutieusement chaque titre pour vous garantir une expérience de lecture inoubliable.
        </p>

        <p>
            Basée en Côte d'Ivoire, nous servons des lecteurs passionnés partout dans le pays, avec livraison rapide et sécurisée.
        </p>
    </div>

</section>

<section class="mission">

    <div class="mission-texte">
        <h2>Notre Mission</h2>

        <p>
            Rendre les histoires intenses et captivantes accessibles à tous les lecteurs passionnés de Côte d'Ivoire.
        </p>

        <p>Nous nous engageons à :</p>

        <ul class="mission-list">
            <li>✓ Proposer une sélection rigoureuse de livres de qualité</li>
            <li>✓ Offrir une livraison rapide et fiable partout en Côte d'Ivoire</li>
            <li>✓ Garantir une expérience d'achat sécurisée et fluide</li>
            <li>✓ Créer une communauté de lecteurs passionnés</li>
        </ul>
    </div>

    <div class="mission-image">
        <img src="{{ asset('image/mission.jpeg') }}" alt="Notre mission">
    </div>

</section>

<section class="valeurs">

    <h2>Nos Valeurs</h2>

    <div class="valeurs-container">

        <div class="valeur-card">
            <h3>Passion</h3>
            <p>Nous sommes passionnés par les livres et les histoires qui font voyager.</p>
        </div>

        <div class="valeur-card">
            <h3>Qualité</h3>
            <p>Nous sélectionnons soigneusement nos livres pour offrir le meilleur à nos lecteurs.</p>
        </div>

        <div class="valeur-card">
            <h3>Confiance</h3>
            <p>Nous plaçons la satisfaction et la confiance de nos clients au cœur de nos priorités.</p>
        </div>

    </div>

</section>

<section class="pourquoi">

    <h2>Pourquoi choisir NovaBooks ?</h2>

    <div class="pourquoi-container">

        <div class="pourquoi-item">
            <h3>Livraison Rapide</h3>
            <p>Recevez vos livres rapidement et en toute sécurité.</p>
        </div>

        <div class="pourquoi-item">
            <h3>Paiement Sécurisé</h3>
            <p>Effectuez vos achats en toute tranquillité.</p>
        </div>

        <div class="pourquoi-item">
            <h3>Support Client</h3>
            <p>Notre équipe est disponible pour vous accompagner.</p>
        </div>

        <div class="pourquoi-item">
            <h3>Emballage Soigné</h3>
            <p>Vos livres sont soigneusement emballés pour leur protection.</p>
        </div>

        <div class="pourquoi-item">
            <h3>Sélection Curatée</h3>
            <p>Découvrez des livres sélectionnés avec attention.</p>
        </div>

        <div class="pourquoi-item">
            <h3>Programme Fidélité</h3>
            <p>Profitez d'avantages pour récompenser votre fidélité.</p>
        </div>

    </div>

</section>

        <footer class="footer">

    <h3>NovaBooks</h3>

    <h2>Prêt à découvrir votre prochain coup de cœur ?</h2>

    <p>Explorez notre sélection exclusive de livres captivants</p>

    <a href="{{ route('books.index') }}" class="cta-button">
        Découvrir la boutique
    </a>

    <p>Votre univers littéraire à portée de clic.</p>

    <p>2026 Nova Books - Tous droits réservés</p>

</footer>


</body>
</html>