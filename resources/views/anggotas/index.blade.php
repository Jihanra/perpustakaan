@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="bg-secondary text-white">
                <div class="font-weight-bold">
                <div class="text-center">
                <div class="card-header">{{ __('DATA ANGGOTA') }}</div></div></div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class='table table-responsive table-striped'>
                        <thead>
                        <a href="/anggotas/create" class="btn btn-primary">Tambah Anggota</a><br><br>
                        <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan nama">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                            <tr>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anggota as $a)
                            <tr>
                                <td>{{ $a->nisn }}</td>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->kelas->nama_kelas }}</td>
                                <td>{{ $a->jurusan }}</td>
                                <td><form action="/anggotas/{{$a->id}}" method="post">
                                    <a href="/anggotas/{{$a->id}}" class="btn btn-success">Detail</a>
                                    <a href="/anggotas/{{$a->id}}/peminjaman" class="btn btn-info">Pinjam</a>
                                    <a href="/anggotas/{{$a->id}}/edit" class="btn btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                                </form></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection