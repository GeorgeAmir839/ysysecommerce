@extends('layouts.style')

@section('content')

    <!-- End Upper Bar -->

    <style>
        .z1 {
            max-height: 500px;
            width: auto;


        }

    </style>


    <div id="myCarousel" class="carousel slide " style="m" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators  ">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner " style="margin-top:20px">
            <div class="carousel-item active">
                <div class="z2">
                    
                </div>
                
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>اهلا بيكم في موقع ايفنتاوي</h1>
                        <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="">

                </div>
                <div class="z3">
                    
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1> جميع منتجاتنا بجودة عالية </h1>
                        <br><br>

                        <p><a class="btn btn-lg btn-primary" href="#">أعرف أكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="z4">
                    
                </div>
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




    <div class="container-fluid  marketing">
        <!-- Three columns of text below the carousel -->
        <h2 class="heading">ما الذي يميز ايفنتاوي؟</h2>
        <div class="row  justify-content-center">
            <div class="col-lg-4 row justify-content-center">
                <img src="{{ asset('assets/img/R (1).png') }}" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                <h3>سرعة الشحن والتوصيل لحد باب البيت</h3>
                <p class="text"> نفخر باننا نقوم يالتوصيل المنتج لضمان وصولةبحالة تبهر بها حبابيك </p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 row justify-content-center">
                <img src="{{ asset('assets/img/has2.jpg') }}" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                <h2> جميع منتجاتنا بجودة عالية </h2>
                <p class="text"> وبأسعار مش هتلاقي زيها في اي مكان</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 row justify-content-center">
                <img src="{{ asset('assets/img/has3.jpg') }}" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>

                <h3>جميع منتجاتنا مصممة بعناية</h3>
                <p class="text"> جميع منتجاتنا مصممة بحب واهتمام من قيل فريق ايفنتاوي</p>


            </div><!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <br><br><br><br><br>
        <div class="row justify-content-center">

            <i class="fas fa-quote-right " dir="rtl"></i>
            <div class="col-lg-4 quote">


                <h3 class="m-4">نوصّل المشاعر</h3>
                <p class="text">نحن متجر الكتروني لطلب وتوصيل الورد والهدايا والتورت والبالون لاي
                    مناسبة ومتخصصين بجعل عملية إرسال الورد والهدايا ممتعة كما استقبالهم.

                </p>



            </div><!-- /.col-lg-4 -->

        </div>
    </div>
    <!-- /.row -->

    <div class="container ">

        <div class="row row justify-content-center">
            <h2 class="heading col-12">مشاهدة المنتجات</h2>

            <form action="/search" class="navbar-form navbar-left">
                <div class="row">
                    <div>
                        <input type="text" name="search" class="form-control search-box" style=""
                            placeholder="product name">
                    </div>
                    <button type="submit" class="btn btn-primary ">Search</button>
                </div>
            </form>
        </div>
        @php
            use App\Models\Cart;
            $user_id = Auth::id();
            $cart = Cart::where('user_id', $user_id)->get();
            $count = Cart::where('user_id', $user_id)->count();
            
        @endphp

        <div>
            <i data-count="{{ $count }}"
                class="fa fa-shopping-cart fa-5x fa-border icon-grey badge">{{ $count }}</i>
            <a href="{{ url('/product/create') }}"><i class="fas fa-cart-plus fa-5x fa-border icon-grey badge">
                    +</i></a>
        </div>
        <div class="row justify-content-center">
            <div class="col row justify-content-around">
                @foreach ($products as $product)

                    <div class="card mb-3" style="width:250px">
                        <a href="{{ url('/productcart/' . $product->id) }}">
                            <img class="card-img-top" style="border-radius: 12px;" height="200px"
                                src="{{ asset('images/' . $product->image) }}" alt="Card image" style="width:100%">
                        </a>

                        <div class="card-body">

                            <a href="{{ url('/productcart/' . $product->id) }}">
                                <h4 class="card-title text">{{ $product->name }}</h4>

                            </a>
                            <a href="{{ url('/productcart/' . $product->id) }}" class="btn btn-primary">اضف الي
                                السلة</a>
                        </div>
                    </div>
                @endforeach
                <span>
                    @include('pagination', ['paginator' => $products, 'interval' => 10])
                </span>
            </div>

        </div>

    </div>



    <h2 class="heading">شغل جديد </h2>
    <div class="container-fluid   recent_work">



        <div class="row">

            @foreach ($products as $product)
                <div class="col-4 m">



                </div>
            @endforeach
            {{-- {{$products->links()}} --}}

        </div>
    </div>


    <div class="footer">
        <div class="container footer">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
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
    <section class="video">
        <video loop muted autoplay>
            <source src="{{ asset('assets/img/ysys/awesome-video.mp4') }}./" type="video/mp4" />
            Sorry, Your Browser Doesn't Support Videos
        </video>
        <div class="text">
            <h3>super awesome video here</h3>
            <p>Its all you need</p>
            <button>see more</button>
        </div>
    </section>
@endsection
