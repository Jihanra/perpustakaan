@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="bg-secondary text-white">
                <div class="font-weight-bold">
                <div class="text-center">
                <div class="card-header">{{ __('TAMBAH PEMINJAMAN') }}</div></div></div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class='table table-responsive table-striped'>
                        <form action="/peminjamans" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="Anggota">Nama Anggota</label>
                                <select class="form-control" name="Anggota">
                                    @foreach($anggota as $a)
                                        <option value="{{$a->id}}">
                                            {{ $a->nama }}
                                        </option>
                                    @endforeach
                                </select></br>
                            </div>
                            <div class="form-group">
                                <label for="Books">Buku</label>
                                <select class="form-control" name="Books">
                                    @foreach($books as $b)
                                        <option value="{{$b->id}}">
                                            {{ $b->judul_buku  }}
                                        </option>
                                    @endforeach
                                </select></br>
                            </div>
                            <div class="form-group">
                                <label for="tgl_pinjam">Tanggal Pinjam</label>
                                <input type="date" class="form-control" required="required" name="tgl_pinjam"></br>
                            </div>
                            <div class="form-group">
                                <label for="tgl_kembali">Tanggal Kembali</label>
                                <input type="date" class="form-control" required="required" name="tgl_kembali"></br>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary float-right">Pinjam</button>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection