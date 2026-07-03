<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;

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

    public function create()
    {
        return view('create');
    }

    public function store(BookStoreRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('covers', 'public');
        }



        Book::create([
            'name' => $request->input('name'),
            'pages' =>  $request->input('pages'),
            'year' =>  $request->input('year'),
            'image' =>  $path_image
        ]);

        return redirect()->route('books.index')->with('success', 'Libro inserito con successo!');
    }
}
