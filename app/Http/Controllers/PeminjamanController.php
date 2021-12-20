<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\Book;
use App\Models\peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        $book = Book::all();
        $peminjaman = Peminjaman::with('anggota','book')->get();
        return view('peminjamans.create', ['peminjaman'=>$peminjaman, 'anggota'=>$anggota, 'books'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        $books = Book::all();
        return view('peminjamans.create', ['anggota'=>$anggota, 'books'=>$books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new Peminjaman;

        $anggota = new Anggota;
        $anggota->id = $request->Anggota;
        $peminjaman->anggota()->associate($anggota);
        //$peminjaman->save();

        $books = new Book;
        $books->id = $request->Books;
        $peminjaman->books()->associate($books);
        //$peminjaman->save();  

        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save(); 
        // if true, redirect to index
        return redirect()->route('anggotas.index')->with('success', 'Peminjaman Buku Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = new Peminjaman;

        $anggota = new Anggota;
        $anggota->id = $request->Anggota;
        $peminjaman->anggota()->associate($anggota);
        $peminjaman->save();

        $books = new Book;
        $books->id = $request->Books;
        $peminjaman->books()->associate($books);
        $peminjaman->save();  
      
        return redirect()->route('anggotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}