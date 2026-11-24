<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.partials.header')
    <main>
        <section class="product-page">

            <section class="product">

            <div class="product-image">
                    <img src="{{ asset('image/' . $book->image) }}"
                    alt="{{ $book->title }}">
            </div>

            <div class="product-info">
                <h1>{{$book->title}}</h1>
                <p class="author">
                Auteur: {{$book->author}}
                </p>
                <p class="price">
                {{ number_format($book->price, 0, ',', ' ') }} FCFA
                </p>
                <div class="description">
                    <h3>Description</h3>
                    <p>{{$book->description}}</p>
                </div>
                <button class="add-cart">Ajouter au panier</button>
            </section>


            <section class="details">
                <h2>Descripiton</h2>
                <p>{{$book->description}}</p>
            </section> 

                 <section class="book-info">
                    <h2>Information sur le livre</h2>
                    <p>Auteur: {{$book->author}}</p>
                    <p>Catégorie :
                        {{ $book->categories->pluck('name')->join(', ') }}
                    </p>
                    <p>Nombe de page:{{$book->pages}}</p>
                    <p>Format: {{$book->format}}</p> 
                 </section>

        </section>
    </main>
</body>
</html>