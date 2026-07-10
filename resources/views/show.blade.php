<x-main>
    <div class="container mt-5">
        <img style="height:10rem;" src="{{ Storage::url($book->image) }}" alt="">
        <p>Dettagli del libro: {{ $book->name }}</p>
        <p> Pagine del libro: {{ $book->pages }}</p>
        <p> Anno del libro: {{ $book->year }}</p>

    </div>
</x-main>
