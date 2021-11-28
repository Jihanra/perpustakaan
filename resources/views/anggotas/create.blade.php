@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA ANGGOTA') }}</div>

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
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" required="required" name="kelas"></br>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" required="required" name="jurusan"></br>
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No Telp</label>
                                <input type="text" class="form-control" required="required" name="no_tlp"></br>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                        </form>

                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection