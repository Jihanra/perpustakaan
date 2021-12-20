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
                        <form action="/anggotas" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" required="required" name="nisn"></br>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" required="required" name="nama"></br>
                            </div>
                            <div class="form-group">
                                <label for="Kelas">Class</label>
                                <select class="form-control" name="Kelas">
                                    @foreach($kelas as $class)
                                        <option value="{{$class->id}}">
                                            {{ $class->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select></br>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" required="required" name="jurusan"></br>
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No Telp</label>
                                <input type="text" class="form-control" required="required" name="no_tlp"></br>
                            </div>
                            <div class="form-group">
                                <label for="photo">Profile Photo</label>
                                <input type="file" class="form-control" required="required" name="photo"></br>
                            <div>
                            <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
                        </form>

                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection