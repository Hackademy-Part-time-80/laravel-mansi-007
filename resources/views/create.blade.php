<x-main>
    <div class="container mt-5">
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome del Libro</label>
                <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}">

                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Pagine totali del Libro</label>
                <input type="text" class="form-control" id="inputName" name="pages" value="{{ old('pages') }}">

                @error('pages')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Anno di uscita del Libro</label>
                <input type="text" class="form-control" id="inputName" name="year" value="{{ old('year') }}">

                @error('year')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFileLg" class="form-label">Cover</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">

            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-danger">Pulisci campi</button>

        </form>
    </div>
</x-main>
