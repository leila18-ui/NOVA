<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="{{ asset('js/panier.js') }}" defer></script>
    <title>LIVRES</title>
</head>
<body>
    
    @include('layouts.partials.header')

    <section class="categorie-bar">
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="#{{ $category->slug }}" class="cat-link">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
    </section>

   
@foreach($categories as $category)

<section id="{{ $category->slug }}" class="categorie-section">

<h2>{{ $category->name }}</h2>

<div class="grille-livres">

@if($category->books->isNotEmpty())

@foreach($category->books as $book)

<div class="livre">

<h3>{{ $book->title }}</h3>
<img src="{{ asset('image/' . $book->image) }}"
                             alt="{{ $book->title }}">
<a href="{{ route('books.show', $book->id) }}" class="plus">
   En savoir plus
</a>
            </div>
@endforeach
 @else
 <p>Aucun livre disponible dans cette catégorie.</p>
@endif
</div>
</section>

@endforeach



</body>
</html>