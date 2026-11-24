<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
class HomeController extends Controller
{
    public function index()
{
    $books = Book::where('is_featured', true)
                 ->take(9)
                 ->get();

    return view('pages.home', compact('books'));
}
}
