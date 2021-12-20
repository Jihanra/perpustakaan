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
                        <form action="/anggotas/{{$anggota->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$anggota->id}}"></br>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" required="required" name="nisn" value="{{$anggota->nisn}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" required="required" name="nama" value="{{$anggota->nama}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="Kelas">Class</label>
                                <select class="form-control" name="Kelas">
                                    @foreach($kelas as $class)
                                        <option value="{{$class->id}}" {{ $anggota->id_kelas == $class->id ? "selected":"" }}>
                                            {{ $class->nama_kelas}}
                                        </option>
                                    @endforeach
                                </select></br>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" required="required" name="jurusan" value="{{$anggota->jurusan}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No Telp</label>
                                <input type="text" class="form-control" required="required" name="no_tlp" value="{{$anggota->no_tlp}}"></br>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Perubahan</button>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection