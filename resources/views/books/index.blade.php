@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
            <div class="bg-secondary text-white">
                <div class="font-weight-bold">
                <div class="text-center">
                <div class="card-header">{{ __('DATA BUKU') }}</div></div></div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class='table table-responsive table-striped'>
                        <thead>
                        @can('manage-users')
                        <a href="/books/create" class="btn btn-primary">Tambah Buku</a><br><br>
                        @endcan
                        <form class="form" method="get" action="{{ route('searching') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="searching" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="searching" class="form-control w-75 d-inline" id="searching" placeholder="Masukkan Judul Buku">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                            <tr>
                                <th>Judul Buku</th>
                                <th>Penerbit </th>
                                <th>Tahun Terbit</th>
                                <th>Jumlah Buku</th>
                                @can('manage-users')
                                <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($book as $b)
                            <tr>
                                <td>{{ $b->judul_buku }}</td>
                                <td>{{ $b->penerbit }}</td>
                                <td>{{ $b->tahun_terbit}}</td>
                                <td>{{ $b->jumlah}}</td>
                                @can('manage-users')
                                <td><form action="/books/{{$b->id}}" method="post">
                                    <a href="/books/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                                </form></td>
                                @endcan
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