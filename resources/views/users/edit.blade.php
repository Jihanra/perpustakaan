@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="bg-secondary text-white">
                <div class="font-weight-bold">
                <div class="text-center">
                <div class="card-header">{{ __('DATA USER') }}</div></div></div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class='table table-responsive table-striped'>
                        <form action="/users/{{$user->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$user->id}}"></br>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" required="required" name="username" value="{{$user->username}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
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