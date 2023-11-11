@extends('layout.main')
    @section('content') 
        <div class="card w-75 mx-auto my-5">
            <div class="card-body ">
                <h5 class="card-title text-center mb-3">Tambah Buku</h5>
                <form action="/book" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Masukkan judul buku" required>
                        @error('judul')      
                        <div class="invalid-feedback">Judul harus diinput.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" placeholder="Masukkan nama penulis" required>
                        @error('penulis')      
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" required>
                        @error('tahun_terbit')      
                        <div class="invalid-feedback">Tahun terbit harus diinput.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control @error('jumlah_halaman') is-invalid @enderror" id="jumlah_halaman" name="jumlah_halaman" placeholder="Masukkan jumlah halaman" required>
                        @error('jumlah_halaman')      
                        <div class="invalid-feedback">Jumlah halaman harus diinput.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ringkasan" class="form-label">Ringkasan</label>
                        <textarea name="ringkasan" id="ringkasan" class="form-control @error('ringkasan') is-invalid @enderror"></textarea>
                        @error('ringkasan')      
                        <div class="invalid-feedback">Confirmation Password is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="url_gambar" class="form-label">Url Gambar</label>
                        <textarea name="url_gambar" id="url_gambar" class="form-control @error('url_gambar') is-invalid @enderror"></textarea>
                        @error('url_gambar')      
                        <div class="invalid-feedback">Confirmation Password is required.</div>
                        @enderror
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <input type="submit" value="Submit" class="btn btn-primary mb-3 w-100">
                    </div>
                </form>
            </div>
        </div>
@endsection