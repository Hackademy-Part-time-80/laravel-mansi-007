<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        //$books = ['Divina comemdia', 'Otello'];


        return view('welcome', ['books' => $books]);
        // return view('welcome', compact('books'));
        // return view('welcome')->with('books', $books);
    }
}
