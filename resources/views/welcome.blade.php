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
             <li><img style="height:10rem;" src="{{ Storage::url($book->image) }}" alt="">{{ $book->name }}</li>
         @endforeach

     </ul>
 </x-main>
