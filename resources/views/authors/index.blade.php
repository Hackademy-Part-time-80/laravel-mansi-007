 <x-main>
     @if (session('success'))
         <div class="alert alert-success" role="alert">
             {{ session('success') }}
         </div>
     @endif
     <div class="d-flex gap-3 mt-5">

         <h2>Lista Autori presenti nel Database</h2>
         <a href="{{ route('authors.create') }}" class="btn btn-primary">+</a>

     </div>

     <ul>
         @foreach ($authors as $author)
             <li class="mt-2">
                 <a href="{{ route('authors.show', ['author' => $author]) }}">{{ $author->firstname }}
                     {{ $author->lastname }}</a>
                 <a href="{{ route('authors.edit', ['author' => $author]) }}" class="btn btn-warning">Modifica</a>
                 <form action="{{ route('authors.destroy', ['author' => $author]) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger" type="submit">Elimina</button>
                 </form>

             </li>
         @endforeach

     </ul>
 </x-main>
