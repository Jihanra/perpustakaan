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
                            <b>Foto Profil</b><br><img width="150px" src="{{asset('storage/'.$anggota->photo)}}">
                            <tr><th>NISN</th><th>:</th><td>{{ $anggota->nisn }}</td></tr>
                            <tr><th>Nama</th><th>:</th><td>{{ $anggota->nama }}</td></tr>
                            <tr><th>Kelas</th><th>:</th><td>{{ $anggota->kelas->nama_kelas }}</td></tr>
                            <tr><th>Jurusan</th><th>:</th><td>{{ $anggota->jurusan }}</td></tr>
                            <tr><th>No Telepon</th><th>:</th><td>{{ $anggota->no_tlp }}</td></tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection