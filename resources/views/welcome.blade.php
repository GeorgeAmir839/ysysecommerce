@extends('layouts.style')

@section('content')
    <div class="upper-bar text-center ">
        <div class="container-fluid">
            <div class="row">

                <div class="col text-left">

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">حساب جديد</h4>
                                    <button type="button" class="close" data-dismiss="modal" data-target="#myModal3"
                                        data-backdrop="static">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="card bg-light">
                                        <article class="card-body mx-auto" dir="rtl">
                                            <h4 class="card-title mt-3 text-center">حساب جديد</h4>
                                            <p class="text-center">Get started with your free account</p>
                                            <form action="Registration.php" method="post" name="form1">

                                                <div class="form-group input-group text-right">
                                                    <div class="input-group-prepend ml">
                                                        <span class="input-group-text"> <i class="fa fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <input name="email" class="form-control" placeholder="ادخل ايميلك"
                                                        type="email">
                                                </div> <!-- form-group// -->
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input name="password" class="form-control" placeholder="الرقم السري"
                                                        type="password">
                                                </div> <!-- form-group// -->
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text mr"> <i class="fa fa-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control mr" placeholder="تأكيد الرقم السري"
                                                        type="password">
                                                </div> <!-- form-group// -->
                                                <!-- form-group// -->
                                                <div class="form-group text-right">
                                                    <label class="cols-sm-2 control-label"></label>
                                                    <div class="input_field radio_option">
                                                        <input type="radio" name="radio" id="rd1" required="required">
                                                        <label for="rd1">رجل</label>
                                                        <input type="radio" name="radio" id="rd2">
                                                        <label for="rd2">انثي</label>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-building"></i>
                                                        </span>
                                                    </div>
                                                    <select class="form-control" name="country">
                                                        <option selected="" required="required"> مدينة</option>
                                                        <option>اسوان</option>
                                                        <option>الاقصر</option>
                                                        <option>اسيوط</option>
                                                        <option>قنا</option>
                                                    </select>
                                                </div> <!-- form-group end.// -->

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">العنوان</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Default"
                                                        aria-describedby="inputGroup-sizing-default">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">تليفون</span>
                                                    </div>
                                                    <input type="text" class="form-control bfh-phone"
                                                        data-format="+20 (ddd) ddd-ddddd">
                                                </div>
                                                <h4 class="card-title mt-3 text-center">انا اريد </h4>

                                                <div class="card-title mt-3 text-center">
                                                    <button class="btn btn-primary btn-sm" type="submit"> <a
                                                            class="btn btn-primary btn-sm" href="#" role="button">
                                                            تقديم خدمة </a></button>
                                                    <button class="btn btn-primary btn-sm" type="submit"> <a
                                                            class="btn btn-primary btn-sm" href="#" role="button">
                                                            حجز مناسبة او خدمة </a></button>

                                                </div>
                                                <div class="form-group">
                                                    <label class="form-check-label"><input type="checkbox" name="checkbox[]"
                                                            required="required"> اوافق علي كل <a href="#">الشروط والبنود</a>
                                                        &amp; <a href="#">المقدمة من قبل ايفنتاوي</a></label>
                                                </div> <!-- form-group// -->
                                                <div class="form-group">
                                                    <label class="form-check-label"><input type="checkbox" name="checkbox[]"
                                                            required="required"> اريد استقبال الاشعارات من قبل
                                                        ايفنتاوي</label>
                                                </div> <!-- form-group// -->

                                                <div class="form-group">
                                                    <button type="submit" name="save" class="btn btn-primary btn-block">
                                                        تسجيل </button>
                                                </div> <!-- form-group// -->

                                            </form>
                                        </article>


                                        <!-- Modal footer -->
                                        <div class="modal-footer text-center ">
                                            <button type="button" class="btn btn-danger "
                                                data-dismiss="modal">اغلاق</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container  center   sticky-top">
                <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="mainnav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="http://127.0.0.1:5555/eventawy.com#section2">تواصل معنا
                                    <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:5555/eventawy.com#section1">من نحن </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown" href="http://127.0.0.1:5555/eventawy.com"
                                    aria-haspopup="true" aria-expanded="false">
                                    المناسبات
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <button class="dropdown-item " type="button">
                                        <div class="row">
                                            <div class="col"> <img class=" navim"
                                                    src="{{ asset('assets-shop/img/monasa.jpg') }}"></div>
                                            <div class="col"> <a href="#" class="an "
                                                    dir="rtl">الزفاف</a> <br>
                                                <a href="#" class="an" dir="rtl">خطوبة</a><br>
                                                <a href="#" class="an" dir="rtl">قراية فاتحة</a><br>
                                                <a href="#" class="an" dir="rtl">حفلة خاصة</a><br>

                                            </div>
                                            <div class="col"> <a href="#" class="an">حفلة
                                                    تخرج</a><br>
                                                <a href="#" class="an" dir="rtl">فان داي</a><br>
                                                <a href="#" class="an" dir="rtl">سبوع</a><br>
                                                <a href="#" class="an" dir="rtl">عيد ميلاد</a><br>
                                            </div>

                                        </div>
                                    </button>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    خدماتنا
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <div class="row">
                                        <div class="col"> <img class=" navim"
                                                src="{{ asset('assets-shop/img/serve.jpg') }}"></div>
                                        <div class="col">
                                            <ul class="row-group">
                                                <li class="an"><a class="an">الزفاف</a></li>
                                                <li class="an"><a class="an">خطوبة</a></li>
                                                <li class="an"><a class="an">قراية فاتحة</a></li>
                                                <li class="an"><a class="an">حفلة خاصة</a></li>

                                            </ul>
                                        </div>
                                        <div class="col " style="margin-right:20px">
                                            <ul class="row-group">
                                                <li class="an"><a class="an">حفلة تخرج</a></li>
                                                <li class="an"><a class="an">فان داي</a></li>
                                                <li class="an"><a class="an"> سبوع</a></li>
                                                <li class="an"><a class="an">عيد ميلاد</a></li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                            </li>
                            <li>
                                <div class="dropdown nav-item">
                                    <a class="nav-link  dropdown-toggle " dir="rtl" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        التسوق
                                    </a>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item text-right shop" href="{{route('shop')}}">تسوق </a>
                                    <a class="dropdown-item text-right shop" href="{{route('cart')}}">عربة التسوق</a>
                                    <a class="dropdown-item text-right shop" href="{{route('checkout')}}">إتمام الشراء</a> --}}
                                    </div>
                                </div>
                            </li>




                        </ul>

                    </div>

                    <a class="navbar-brand" href="#">

                        <!-- <span >ايفنت</span><span class="j">اوي</span>

                           <div  style="font-size: 30px";  ><span class="j" >Event</span><span>awy</span></div>  -->
                        <img src="{{ asset('assets/img/logoooooo.png') }}" width="200px" />

                    </a>
                </nav>
            </div>

            <!-- End Upper Bar -->



            <div class="mt-3">

                <div id="myCarousel" class="carousel slide " data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators  ">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/kk.jpg') }}" alt="Los Angeles" width="100%" height="100%">
                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>اهلا بيكم في موقع ايفنتاوي</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/04-01.png') }}" alt="Chicago" width="100%" height="100%">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1> جميع منتجاتنا بجودة عالية </h1>
                                    <br><br>

                                    <p><a class="btn btn-lg btn-primary" href="#">أعرف أكثر</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/02-01.png') }}" alt="New York" width="100%" height="100%">
                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>سرعة الشحن والتوصيل لحد باب البيت .</h1>

                                    <p><a class="btn btn-lg btn-primary" href="#">تصفح المعرض</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

            </div>

            <i class="fas fa-angle-down text-right " dir="rtl"></i>
            <div class="container-fluid  marketing">
                <!-- Three columns of text below the carousel -->
                <h2 class="heading">ما الذي يميز ايفنتاوي؟</h2>
                <div class="row  ">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/R (1).png') }}" class="bd-placeholder-img rounded-circle"
                            width="140" height="140" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                        <h3>سرعة الشحن والتوصيل لحد باب البيت</h3>
                        <p class="text"> نفخر باننا نقوم يالتوصيل المنتج لضمان وصولةبحالة تبهر بها حبابيك </p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/has2.jpg') }}" class="bd-placeholder-img rounded-circle"
                            width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                        <h2> جميع منتجاتنا بجودة عالية </h2>
                        <p class="text"> وبأسعار مش هتلاقي زيها في اي مكان</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/has3.jpg') }}" class="bd-placeholder-img rounded-circle"
                            width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                        <h3>جميع منتجاتنا مصممة بعناية</h3>
                        <p class="text"> جميع منتجاتنا مصممة بحب واهتمام من قيل فريق ايفنتاوي</p>


                    </div><!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
                <br><br><br><br><br>
                <div class="row   ">
                    <div class="col-lg-4">


                    </div><!-- /.col-lg-4 -->
                    <i class="fas fa-quote-right " dir="rtl"></i>
                    <div class="col-lg-4 quote">

                        <div>
                            <h3>نوصّل المشاعر</h3>
                            <p class="text">نحن متجر الكتروني لطلب وتوصيل الورد والهدايا والتورت والبالون لاي
                                مناسبة ومتخصصين بجعل عملية إرسال الورد والهدايا ممتعة كما استقبالهم.

                            </p>

                        </div>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">


                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
            <!-- /.row -->

            <div class="container">
                <h2 class="heading">استكشف الفئات</h2>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="{{ asset('assets/img/ward.jpg') }}" alt="Card image"
                                style="width:100%">
                            <div class="card-body">

                                <a href="#" class="text">ورد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="{{ asset('assets/img/bakaud.jpg') }}" alt="Card image"
                                style="width:100%">
                            <div class="card-body">

                                <a href="#" class="text">هدايا</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="{{ asset('assets/img/hadia.jpg') }}" alt="Card image"
                                style="width:100%">
                            <div class="card-body">

                                <a href="#" class="text">فاظة</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="{{ asset('assets/img/wardkaka.jpg') }}" alt="Card image"
                                style="width:100%">
                            <div class="card-body">

                                <a href="#" class="text">ورد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fas fa-angle-down"></i>
            </div>



            <h2 class="heading">شغل جديد </h2>
            <div class="container-fluid   recent_work">
                <div class="row">
                    @foreach ($data as $row)
                        <div class="col-4 m">
                            <div class="card" style="width:400px">
                                
                                
                                <a href="{{url('/product/' . $row->id)}}">
                                    {{-- <img src="{{ url('storage/images/'.$article->image) }}" alt="" title="" /> --}}
                                    {{-- {{dd($list->product_image')}} --}}
                                    
                                    <img class="card-img-top" src="{{asset('img/'.$row  ->product_image) }}" alt="Card image" width="200" height="200">
                                   
        
                                </a>
        
                                
                                <div class="card-body">
                                    <a href="{{url('/product/' . $row->id)}}">
                                        <h4 class="card-title text">{{$row->name}}</h4>
        
                                    </a>
        
                                    <a href="{{url('/product/' . $row->id)}}}" class="btn btn-primary">اضف الي السلة</a>
                                </div>
                                <a href="{{ url('/product/' . $row->id ) }}"class="btn btn-outline-success btn-sm">show</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <div class="footer">
                <div class="container footer">
                    <img src="{{ asset('assets-shop/img/logo.png') }}" alt="Logo" />
                    <p>We Are Social</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fas fa-home"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <p class="copyright">&copy; 2021 <span>Eventawy</span> All Right Reserved</p>
                </div>
            </div>
        @endsection
