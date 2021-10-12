@extends('layouts.master2')

@section('content')
<div class="card uper">
    <div class="card-header">
        {!! '<h1>Me/Miss: ' . $data->username . ' Welcome To Show Your data</h1>' !!}
        <a href="{{ url('/register') }}" class='btn btn-dark'> Register form </a>
        <a href="{{ url('/user') }}" class='btn btn-light border border-dark'> Returen To Show All User </a>
        <a href="{{ url('/login') }}" class='btn btn-dark border border-dark'> login form </a>
        {{-- <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back</a> --}}
    </div>

    <div class="card-body">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 row justify-content-arouned">
                <div class="form-group">
                    <strong>id:</strong>
                    {{ $data->id }}

                </div>
                <div class="form-group">

                    <strong>First name:</strong>

                    {{ $data->username }}

                </div>
               
                <div class="form-group">

                    <strong>email:</strong>
                    {{ $data->email }}

                </div>
                <div class="form-group">
                    <strong>Gender:</strong>
                    {{ $data->gender }}

                </div>
                <div class="form-group">

                    <strong>City:</strong>

                    {{ $data->city }}

                </div>
                <div class="form-group">

                    <strong>Address:</strong>

                    {{ $data->address }}

                </div>
                <div class="form-group">

                    <strong>phone:</strong>

                    {{ $data->phone }}

                </div>
                <div class="form-group">

                    <strong>Role:</strong>

                    {{ $data->role }}

                </div>
                <div class="form-group p-3">

                    <a href="{{ url('/user/' . $data->id) }}" class="btn btn-danger m-r-1em mx-2">Delete</a>
                    <a href="{{ url('/user/' . $data->id . '/edit') }}" class="btn btn-primary m-r-1em mx-4">Edit</a>

                    <a href="{{ url('/logoutdoctor') }}" class="btn btn-dark m-r-1em mx-2">logout</a>
                </div>
            </div>


        </div>

    </div>
</div>
@endsection