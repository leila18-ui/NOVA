<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    // Affichage du catalogue par catégories
    public function index()
    {
        $categories = Category::with('books')->get();

        return view('books.index', compact('categories'));
    }

    // Affichage des détails d'un livre
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    // Affichage de la page d'accueil
    public function home()
    {
        $books = Book::all();

        return view('pages.home', compact('books'));
    }


    
}
