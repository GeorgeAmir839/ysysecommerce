<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventawy</title>
    <link rel="shortcut icon" style="width: 80px hight:80px" href="{{ asset('assets/img/logoooooo.png') }}" />

    <!-- Skitter Styles -->
    <link href="{{ asset('dist/skitter.css') }}" type="text/css" media="all" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kaspar.css') }}" />

    <!-- Skitter JS -->

    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('dist/jquery.skitter.min.js') }}"></script>

    <!-- Init Skitter -->
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('.skitter-large').skitter({
                thumbs: true,
                dots: false
            });
        });
        function showdesc() {
        document.getElementById("demo").innerHTML = "{{ $data->productdesc ?? '' }}";
      }
        // var oneproduct,qntproduct,total;
        // oneproduct=document.getElementById("oneproduct");
        // qntproduct=document.getElementById("qntproduct");
        // total=oneproduct.value*qntproduct.value;
        // console.log(total);
        // document.getElementById("totalproduct").innerHTML = total;
      
    </script>
    <!-- Custom -->
    <link href="{{ asset('css/styles.css') }}" type="text/css" media="all" rel="stylesheet" />
    <style>
        
        body {
            position: relative;
        }

        *.icon-blue {
            color: #0088cc;
        }

        *.icon-grey {
            color: rgb(3, 1, 24);
            font-size: 20px;
            margin-right: 20px;
        }

        i {
            width: 20px;
            text-align: center;
            vertical-align: middle;
            position: relative;
        }

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- start upper Bar -->
    <!-- start upper Bar -->

    <div class="upper-bar text-center ">

        <div class="row">

            <div class="col text-left">

                @if (Auth::user())
                    <a class="btn btn-primary enter ml-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>



                @else
                    <a class="btn btn-primary enter ml-4" href="{{ route('login') }}">دخول</a>
                    <a class="btn btn-primary enter ml-3" href="{{ route('register') }}">تسجيل جديد</a>

                @endif




                <nav class="navbar container  navbar-expand-lg navbar-light bg-light sticky-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="mainnav">

                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item ">
                                <a class="nav-link" href="#section2">تواصل معنا <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#section1">من نحن </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    المناسبات
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <button class="dropdown-item " type="button">
                                        <div class="row">
                                            <div class="col"> <img class=" navim"
                                                    src="{{ asset('assets/img/monasa.jpg') }}"></div>
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
                                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    خدماتنا
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">


                                    <div class="row">
                                        <div class="col"> <img class=" navim"
                                                src="{{ asset('assets/img/serve.jpg') }}"></div>
                                        <div class="col">
                                            <ul class="list-group">
                                                <li class="an"><a class="an">الزفاف</a></li>
                                                <li class="an"><a class="an">خطوبة</a></li>
                                                <li class="an"><a class="an">قراية فاتحة</a>
                                                </li>
                                                <li class="an"><a class="an">حفلة خاصة</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col " style="margin-right:20px">
                                            <ul class="list-group">
                                                <li class="an"><a class="an">حفلة تخرج</a>
                                                </li>
                                                <li class="an"><a class="an">فان داي</a>
                                                </li>
                                                <li class="an"><a class="an"> سبوع</a></li>
                                                <li class="an"><a class="an">عيد ميلاد</a>
                                                </li>
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
                                        <a class="dropdown-item text-right shop" href="http://127.0.0.1:8000/shop">تسوق
                                        </a>
                                        <a class="dropdown-item text-right shop" href="http://127.0.0.1:8000/cart">عربة
                                            التسوق</a>
                                        <a class="dropdown-item text-right shop"
                                            href="http://127.0.0.1:8000/checkout">إتمام الشراء</a>

                                    </div>

                                </div>
                            </li>




                        </ul>

                    </div>

                    <a class="navbar-brand" href="#">


                        <img src="{{ asset('assets/img/logoooooo.png') }}" width="200px" />
                    </a>
                </nav>


            </div>
        </div>
    </div>
    @yield('content')
    {{-- @yield('registerevent')
    @yield('login')
    @yield('edit')
    @yield('add_service')
    @yield('add_message') --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
