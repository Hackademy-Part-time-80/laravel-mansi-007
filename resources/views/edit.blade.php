<x-main>
    <div class="container mt-5">
        <form action="{{ route('books.update', ['book' => $book]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome del Libro</label>
                <input type="text" class="form-control" id="inputName" name="name" value="{{ $book->name }}">

                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Pagine totali del Libro</label>
                <input type="text" class="form-control" id="inputName" name="pages" value="{{ $book->pages }}">

                @error('pages')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Anno di uscita del Libro</label>
                <input type="text" class="form-control" id="inputName" name="year" value="{{ $book->year }}">

                @error('year')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                @foreach ($categories as $category)
                    <div class="form-check">
                        <input @if ($book->categories->contains($category->id)) checked @endif class="form-check-input"
                            name="categories[]" type="checkbox" value="{{ $category->id }}"
                            id="checkDefault-{{ $category->id }}">
                        <label class="form-check-label" for="checkDefault-{{ $category->id }}">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <img style="height:10rem;" src="{{ Storage::url($book->image) }}" alt="">
                <label for="formFileLg" class="form-label">Cover Attuale</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
            <button type="reset" class="btn btn-danger">Pulisci campi</button>

        </form>
    </div>
</x-main>
