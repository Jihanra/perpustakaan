@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                        <form action="/books/{{$book->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$book->id}}"></br>
                            <div class="form-group">
                                <label for="judul_buku">Judul Buku</label>
                                <input type="text" class="form-control" required="required" name="judul_buku" value="{{$book->judul_buku}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control" required="required" name="penerbit" value="{{$book->penerbit}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="text" class="form-control" required="required" name="tahun_terbit" value="{{$book->tahun_terbit}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah Buku</label>
                                <input type="text" class="form-control" required="required" name="jumlah" value="{{$book->jumlah}}"></br>
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