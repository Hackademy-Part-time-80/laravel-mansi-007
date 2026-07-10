 <x-main>
     @if (session('success'))
         <div class="alert alert-success" role="alert">
             {{ session('success') }}
         </div>
     @endif
     <div class="d-flex gap-3 mt-5">

         <h2>Lista Libri presenti nel Database</h2>
         <a href="{{ route('books.create') }}" class="btn btn-primary">+</a>

     </div>

     <ul>
         @foreach ($books as $book)
             <li class="mt-2">
                 <a href="{{ route('books.show', ['book' => $book]) }}">{{ $book->name }}</a>
                 <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-warning">Modifica</a>
                 <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger" type="submit">Elimina</button>
                 </form>

             </li>
         @endforeach

     </ul>
 </x-main>
