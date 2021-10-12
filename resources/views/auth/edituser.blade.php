@extends('layouts.master2')
@section('content')
    <div id="app">
      
        {{-- register --}}
        
        <div class="container">
            
            <div class=" bg-light">
                
                <article class="card-body mx-auto">
                    <h4 class="card-title mt-3 text-center">Edit By Admin</h4>
                    {{-- <p class="text-center">Get started with your free account</p> --}}
                    <form method="POST" action="{{ url('/user/' . $data->id) }}">
                        @method('put')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        @csrf
                        

                        <div class="form-group input-group">
                            
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input type="text" placeholder="First Name"
                                class="form-control @error('fname') is-invalid @enderror" name="fname"
                                value="{{ $data->fname }}" required autocomplete="fname" autofocus required="required">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input id="lname" type="text" placeholder="Last Name"
                                class="form-control @error('lname') is-invalid @enderror" name="lname"
                                value="{{ $data->lname }}" required autocomplete="lname" autofocus required="required">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>

                            <input id="email" placeholder="Email address" type="email"
                                class="form-control " name="email"
                                value="{{ $data->email }}" required autocomplete="email">
                                {{-- @error('email') is-invalid @enderror --}}
                            {{-- @error('email')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}

                        </div>
                        
                        <div class="form-group input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <select class="form-control" name="city">
                                <option selected="" required="required" > {{ $data->city }}</option>
                                <option value="Aswan">Aswan</option>
                                <option value="Luxor">Luxor</option>
                                <option value="Alex">Alex</option>
                                <option value="Cairo">Cairo</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Address" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" name="address" value="{{ $data->address }}">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bfh-phone" name="phone" placeholder="Phone Number"
                                data-format="+20 (ddd) ddd-ddddd" value="{{ $data->phone }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="text" class="form-control " name="role" 
                                value="{{ $data->role }}">
                           
                        </div>

                        {{-- <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" name="checkbox[]" required="required"> I
                                accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" name="checkbox[]" required="required"> I
                                want to receive the newsletter</label>
                        </div> --}}
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary btn-block"> Edit </button>
                        </div>
                        
                    </form>
                </article>
            </div>
        </div>
        {{-- register --}}
       
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection
