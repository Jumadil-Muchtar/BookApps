<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            if(! Gate::allows('read-book')){
                abort(403);
            }
            $books = Book::all();

            $id_user = Auth::id();
            $user = User::find($id_user);
            
            return view('home', [
                'books' => $books,
                'username' => $user->name
            ]);
        }
        else{
            return view('login');
        }   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) 
    {
        if(Auth::check()){
            if ($request->user()->cannot('create', Book::class)){
                abort(403);
            }
            $id_user = Auth::id();
            $user = User::find($id_user);
            return view('createBook', ['username' => $user->name]);
        }else{
            return view('login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $id_user = Auth::id();
        $user = User::find($id_user);
        $credentials = $request->validate([
            'judul'=> 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_halaman' => 'required',
            'ringkasan' => 'required',
            'url_gambar' => 'required',
        ]);

        $data = [
            'judul' => $credentials['judul'],
            'penulis' => $credentials['penulis'],
            'tahun_terbit' => $credentials['tahun_terbit'],
            'jumlah_halaman' => $credentials['jumlah_halaman'],
            'ringkasan' => $credentials['ringkasan'],
            'url_gambar' => $credentials['url_gambar'],
            'user_id' => $id_user,
        ];
        $row = Book::create($data);
        return redirect()->to('book')->with('success', 'Berhasil menambahkan buku baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->get()->first();
        $id_user = Auth::id();
        $user = User::find($id_user);
        return view('detailBook', [
            'book' => $book,
            'username' => $user->name
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->get()->first();
        $id_user = Auth::id();
        $user = User::find($id_user);
        return view('editBook', [
            'book' => $book,
            'username' => $user->name
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id_book)
    {
        $book = Book::find($id_book);
        $auth = Auth::id();
        $id_user = Auth::id();
        $user = User::find($id_user);

        
        $credentials = $request->validate([
            'judul'=> 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_halaman' => 'required',
            'ringkasan' => 'required',
            'url_gambar' => 'required',
        ]);

        $data = [
            'judul' => $credentials['judul'],
            'penulis' => $credentials['penulis'],
            'tahun_terbit' => $credentials['tahun_terbit'],
            'jumlah_halaman' => $credentials['jumlah_halaman'],
            'ringkasan' => $credentials['ringkasan'],
            'url_gambar' => $credentials['url_gambar'],
        ];
        $isSuccess = Book::where('id', $id_book)->update($data);
        
        if ($isSuccess > 0){
            return redirect()->to('book')->with('success', 'Data buku berhasil diubah');
        }else{
            return back()->withErrors(['error' => 'Data gagal diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id_user = Auth::id();
        $user = User::find($id_user);
        Book::where('id', $id)->delete();
        return redirect()->route('book', ['username' => $user->name], )->with('success', 'Berhasil menghapus buku!');
    }
}
