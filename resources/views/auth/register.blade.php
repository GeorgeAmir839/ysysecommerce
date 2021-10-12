@extends('layouts.style')

@section('content')



    <div id="app">
        {{-- register --}}
        <br><br><br><br>
        <div class="container" style="">
            <div class="card bg-light">
                <article class="card-body mx-auto" dir="rtl">
                    <h4 class="card-title mt-2 text-center p-0">حساب جديد</h4>
                    <p class="text-center">كن شريكا في موقع ايفنتاوي وسارع بالتسجيل</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group input-group">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input type="text" placeholder="الاسم الاول"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}"  autocomplete="username" autofocus
                                >

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>

                            <input id="email" placeholder="ادخل ايميلك" type="text"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}"  autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bfh-phone" name="phone" placeholder="رقم الهاتف"
                                data-format="+20 (ddd) ddd-ddddd" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>

                            <input id="password" type="password" placeholder="الرقم السري"
                                class="form-control @error('password') is-invalid @enderror" name="password" 
                                autocomplete="new-password" value="{{ old('password') }}">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>

                            <input id="password-confirm" type="password" placeholder="تأكيد الرقم السري"
                                class="form-control" name="password_confirmation"  autocomplete="new-password"
                                value="{{ old('password') }}">


                        </div>

                        {{-- <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>

                            <input id="password-confirm" type="password" placeholder="Repeat password" class="form-control"
                                name="password_confirmation"  autocomplete="new-password" value="{{ old('password') }}">

                        </div> --}}



                        <div class="form-group input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            </div>
                            <select class="form-control" name="city">
                                <option value=""  disabled selected>مدينة</option>
                                <option value="Aswan">اسوان</option>
                                <option value="Luxor">لقصر</option>
                                <option value="Alex">الاسكندرية</option>
                                <option value="Cairo">القاهرة</option>
                            </select>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="العنوان" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" name="address" value="{{ old('address') }}">

                        </div>
                        {{-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Address" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" name="address" value="{{ old('address') }}">
                            
                        </div> --}}

                        {{-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i
                                        class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bfh-phone" name="phone" placeholder="Phone Number"
                                data-format="+20 (ddd) ddd-ddddd" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="form-group row justify-content-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text">النوع .<i class="fas fa-venus-mars"></i></span>
                            </div>
                            <div class="input_field radio_option m-1">
                                <input id="gender" type="radio" class="mx-2 @error('gender') is-invalid @enderror"
                                    name="gender"  autocomplete="gender" autofocus value="male">
                                <label for="rd1">رجل</label>
                                <input id="gender" type="radio" class="mx-2 @error('gender') is-invalid @enderror"
                                    name="gender"  autocomplete="gender" autofocus value="female">
                                <label for="rd1">انثي</label>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <h4 class="card-title mt-3 text-center">اذا كنت تريد ان تكون من شركائنا و تقدم خدمة </h4>
                        <div class="input_field radio_option m-1">
                            <input id="gender" type="radio" class="mx-2" name="service" 
                                autocomplete="gender" autofocus value="true">
                            <label for="rd1">اريد تقديم خدمة</label>
                            <input id="gender" type="radio" class="mx-2" name="service" 
                                autocomplete="gender" autofocus value="false">
                            <label for="rd1">اريد استقبال خدمة</label>

                        </div>

                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary btn-block"> تسجيل </button>
                        </div> <!-- form-group// -->


                    </form>
                </article>
            </div>
        </div>
        {{-- register --}}





    @endsection
