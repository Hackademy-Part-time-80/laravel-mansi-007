<x-main>
    <div class="container mt-5">
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome Autore</label>
                <input type="text" class="form-control" id="inputName" name="firstname" value="{{ old('firstname') }}">

                @error('firstname')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Cognome Autore</label>
                <input type="text" class="form-control" id="inputName" name="lastname" value="{{ old('lastname') }}">

                @error('lastname')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-danger">Pulisci campi</button>

        </form>
    </div>
</x-main>
