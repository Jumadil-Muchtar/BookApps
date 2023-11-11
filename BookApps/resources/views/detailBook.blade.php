@extends('layout.main')
    @section('content') 
        <div class="card p-3 mx-auto my-2 " style="max-width: 800px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $book->url_gambar }}" class="img-fluid rounded-start" alt="...">
                <div class="d-grid gap-2 d-md-block m-3 text-center">
                    <a href="{{  route('book.edit', ['book_id'=> $book->id ]) }}" class="btn btn-warning" type="button">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ route('book.destroy', ['book_id'=>$book->id ]) }}" method="post">
                      @csrf 
                      @method('DELETE')
                      <button type="submit" name="submit" class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                    </form>
                  </div>

              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->judul }}</h5>
                  <p class="card-text">Penulis : {{  $book->penulis }}</p>
                  <p class="card-text">Tahun Terbit : {{  $book->tahun_terbit }}</p>
                  <h6 class="card-title">Ringkasan</h6>
                  <p class="card-text">{{  $book->ringkasan }}</p>
                  
                </div>
              </div>
            </div>
          </div>

  @endsection
