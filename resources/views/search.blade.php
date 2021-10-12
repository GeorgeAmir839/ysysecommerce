
@extends('layouts.style')

@section('content')

@foreach ($data as $row)
<div class="col-4 m">
    <div class="card" style="width:400px">

            <img class="card-img-top" src="{{ asset('images/' . $row->image) }}"
                alt="Card image" width="200" height="200">

        <div class="card-body">
                <h4 class="card-title text">{{ $row->name }}</h4>

        </div>

    </div>
</div>
@endforeach

@endsection
