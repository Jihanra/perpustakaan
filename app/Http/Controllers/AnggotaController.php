<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\Book;
use App\Models\peminjaman;
use PDF;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::with('kelas')->get();
        return view('anggotas.index', ['anggota'=>$anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('anggotas.create',['kelas'=>$kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota = new Anggota;
        
        if($request->file('photo')){ 
            $image_name = $request->file('photo')->store('images','public'); 
        }

        $anggota->nisn = $request->nisn;
        $anggota->nama = $request->nama;
        $anggota->jurusan = $request->jurusan;
        $anggota->no_tlp = $request->no_tlp;
        $anggota->photo = $image_name;
       
        $kelas = new Kelas;
        $kelas->id = $request->Kelas;
        $anggota->kelas()->associate($kelas);
        $anggota->save();
        // if true, redirect to index
        return redirect()->route('anggotas.index')->with('success', 'Penambahan Anggota Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggotas.view', ['anggota' =>$anggota]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        $kelas = Kelas::all();
        return view('anggotas.edit',['anggota'=>$anggota,'kelas'=>$kelas]);
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
        $anggota = Anggota::find($id);
        $anggota->nisn = $request->nisn;
        $anggota->nama = $request->nama;
        $anggota->jurusan = $request->jurusan;
        $anggota->no_tlp = $request->no_tlp;

        $kelas = new Kelas;
        $kelas->id = $request->Kelas;

        $anggota->kelas()->associate($kelas);
        $anggota->save();
        
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
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect()->route('anggotas.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $anggota = anggota::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('anggotas.index', compact('anggota'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function peminjaman($id)
    {
        $anggota = Anggota::find($id);
        return view('anggotas.peminjaman',['anggota'=>$anggota]);
    }
    public function report($id){ 
        $anggota = Anggota::find($id); $pdf = PDF::loadview('anggotas.report',['anggota'=>$anggota]); 
        return $pdf->stream(); 
    }
    public function pinjam()
    {
    $books = Book::all();
    return view('anggotas.pinjam',['books'=>$books]);
    }
}
