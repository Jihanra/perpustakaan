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
                        <thead>
                            <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                            <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection