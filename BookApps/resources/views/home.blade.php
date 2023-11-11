@extends('layout.main')
    @section('content') 
        <h1 class="my-3">Semua Buku</h1>
        <div class="d-flex flex-row flex-wrap">

            @foreach ($books as $book )
                    <div class="card m-2" style="width: 12rem;">
                        <a href="{{ route('book.show', ['book_id' => $book->id]) }}" class="text-decoration-none text-dark">
                            <img class="card-img-top" src="{{ $book->url_gambar }}" alt="{{ $book->judul }}">
                            <div class="card-body">
                                <h6 class="card-title">{{ $book->judul }}</h6> 
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>

    @endsection

