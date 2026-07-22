<x-main>
    <div class="container mt-5">
        <img style="height:10rem;" src="{{ Storage::url($book->image) }}" alt="">
        <p>Dettagli del libro: {{ $book->name }}</p>
        <p> Pagine del libro: {{ $book->pages }}</p>
        <p> Anno del libro: {{ $book->year }}</p>
        <p>Autore: {{ $book->author->firstname }} {{ $book->author->lastname }}</p>
        <hr>
        <h3>Lista categorie Associate</h3>
        <ul>
            @foreach ($book->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
</x-main>
