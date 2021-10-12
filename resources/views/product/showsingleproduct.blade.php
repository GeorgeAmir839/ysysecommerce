@extends('layouts.master2')

@section('content')
<div class="card uper">
    <div class="card-header">
        {!! '<h1>Me/Miss: ' . $product->name . ' Welcome To Show Your products</h1>' !!}
        <a href="{{ url('/register') }}" class='btn btn-dark'> Register form </a>
        <a href="{{ url('/user') }}" class='btn btn-light border border-dark'> Returen To Show All User </a>
        <a href="{{ url('/login') }}" class='btn btn-dark border border-dark'> login form </a>
        {{-- <a class="btn btn-primary" href="{{ route('productss.index') }}"> Back</a> --}}
    </div>

    <div class="card-body">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 row justify-content-arouned">
                <div class="form-group">
                    <strong>id:</strong>
                    {{ $product->id }}

                </div>
                <div class="form-group">

                    <strong>First name:</strong>

                    {{ $product->name }}

                </div>
                <div class="form-group">

                    <strong>Last name:</strong>

                    {{ $product->category }}

                </div>
                <div class="form-group">

                    <strong>email:</strong>
                    {{ $product->productdesc }}

                </div>
                <div class="form-group">
                    <strong>Gender:</strong>
                    {{ $product->price }}

                </div>
               
                <div class="form-group p-3">

                    <a href="{{ url('/user/' . $product->id) }}" class="btn btn-danger m-r-1em mx-2">Delete</a>
                    <a href="{{ url('/user/' . $product->id . '/edit') }}" class="btn btn-primary m-r-1em mx-4">Edit</a>

                    <a href="{{ url('/logoutdoctor') }}" class="btn btn-dark m-r-1em mx-2">logout</a>
                </div>
            </div>


        </div>

    </div>
</div>
@endsection