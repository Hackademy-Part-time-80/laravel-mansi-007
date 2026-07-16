<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Author;

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
        //devo portare dietro una variabile $authors
        $authors = Author::all();
        return view('create', ['authors' => $authors]);
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
            'image' =>  $path_image,
            'author_id' => $request->input('author_id'),
        ]);

        return redirect()->route('books.index')->with('success', 'Libro inserito con successo!');
    }

    public function show(Book $book)
    {
        return view('show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        return view('edit', ['book' => $book]);
    }

    public function update(BookUpdateRequest $request, Book $book)
    {
        $path_image = $book->image;
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('covers', 'public');
        }
        $book->update([
            'name' => $request->input('name'),
            'pages' =>  $request->input('pages'),
            'year' =>  $request->input('year'),
            'image' =>  $path_image
        ]);

        return redirect()->route('books.index')->with('success', 'Libro modificato con successo!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo!');
    }
}
