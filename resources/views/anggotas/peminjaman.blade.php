@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="bg-secondary text-white">
                <div class="font-weight-bold">
                <div class="text-center">
                <div class="card-header"><h2>Histori Peminjaman</h2></div></div></div></div>

                <div class="card-body">
                    <b>NISN</b>         : {{ $anggota->nisn }}<br>
                    <b>Nama</b>         : {{ $anggota->nama }}<br>
                    <b>Kelas</b>        : {{ $anggota->Kelas->nama_kelas}}<br><br>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($anggota->books as $b)
                            <tr>
                                <td>{{ $b->judul_buku }}</td>
                                <td>{{ $b->penerbit }}</td>
                                <td>{{ $b->tahun_terbit }}</td>
                                <td>{{ $b->pivot->tgl_pinjam }}</td>
                                <td>{{ $b->pivot->tgl_kembali }}</td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/anggotas/{{$anggota->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection