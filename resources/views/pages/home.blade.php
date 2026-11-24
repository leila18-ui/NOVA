@extends('layouts.novabooks')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'Accueil — NovaBooks')

@section('content')

    <section class="partie2">
        <p>Votre librairie en ligne</p>
        <h1>Plongez dans des <br>histoires <strong>intenses</strong></h1>
        <p>Romance, Dark Romance, Fantasy, Thriller...</p>
        <p>Trouvez le livre qui fera battre votre cœur</p>

        <<a href="{{ route('books.index') }}">
            <h5>Découvrir la boutique</h5></a>
    </section>

    <div class="exclu">
        <h5>Nos coups de cœur</h5>
        <h3>Les plus populaires</h3>
    </div>
    
<section class="image">

    @forelse($books as $book)

        <div class="livre">

            <img src="{{ asset('image/' . $book->image) }}" alt="{{ $book->title }}">
                alt="{{ $book->title }}">

            <p>
                <strong>{{ $book->title }}</strong><br>
                de {{ $book->author }}
            </p>

            <span>{{ $book->price }} FCFA</span>

            <h3>
                <a href="{{ route('books.show', $book->id) }}"
                    class="plus">
                    Voir plus
                </a>
            </h3>

        </div>

    @empty

        <p>Aucun coup de cœur disponible pour le moment.</p>

    @endforelse

</section>

   
    <section class="avis-clients">
        <div class="avis-header">
            <h3>Avis de nos clients</h3>
            <p>Découvrez ce que nos lecteurs pensent de leurs achats</p>
        </div>

        <div class="avis-container">
            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"J'ai adoré Captive ! Un vrai page-turner qui m'a tenue éveillée jusqu'à 3h du matin. Livraison rapide en plus !"</p>
                <p class="avis-auteur">- Ama K.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"Leonid Petrov est intense et captivant. Exactement ce que je cherchais. NovaBooks a une super sélection !"</p>
                <p class="avis-auteur">- Marie T.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★☆</div>
                <p class="avis-texte">"Bon site, bonne qualité de livres. Le service client m'a aidée rapidement. Je recommande !"</p>
                <p class="avis-auteur">- Fatima B.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"Birthday Girl m'a complètement surprise. Merci NovaBooks pour cette découverte ! Emballage soigné."</p>
                <p class="avis-auteur">- Sarah D.</p>
            </div>
        </div>
    </section>


@endsection