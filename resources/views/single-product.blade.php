@extends('layouts.style')

@section('content')

    <div class="content" style="margin-top: 200px">

        <div class="container">
            <div class="thickline"></div>
        </div>
        <article class="product-details container " data-component-product>

            <div class="row">

                <!-- gallery and tabs column -->

                <div class="col-md-8">

                    <div class="zoom-gallery row">


                        <div class="col-md-10">
                            @if ($data->image != '')

                                <img src="{{ asset('images/' . $data->image) }}" width="350" height="350"
                                    class="img-fluid detail-img" data-img>

                            @endif
                        </div>

                    </div>


                </div>

                <!-- product name and add to cart -->

                <div class="col-md-4">
                    <div class="">
                        
                        <h4 class=" product-heading" data-name>
                        <span style="color: blueviolet; font-size:15px">Product name: </span>{{ $data->name }}</h4>
                    </div>
                    <!-- product attributes -->
                    <ul class="list-unstyled text-muted">
                        <li>brand:{{ $data->brand }} <span>

                                {{-- @foreach ($brand_name as $name)
                               {{$name->brand_name}}
                                @endforeach
                            </span></li> --}}
x   
                        <li>SKU: <span>new</span></li>
                        <li>Qnt: <span id="qntproduct">{{ $data->qnt }}</span></li>
                    </ul>
                    <div class="price h5">
                        <span class="currency" data-currency>For 1 Product $</span> <span id="oneproduct" data-price>{{ $data->price }}</span>
                    </div>
                    <div class="old-price">
                        <span class="currency" data-currency>$</span> <span
                            data-price>{{ $data->price_discount }}</span>
                    </div>
                    {{-- <div class="price h5">
                        <span class="currency" data-currency>Total $</span> <span id="totalproduct" data-price></span>
                    </div> --}}

                    <p id="demo">
                        
                    </p>
                    <hr>



                    <a type="button" href="{{ url('/addCart/' . $data->id) }}" class="btn btn-primary btn-block btn-icon">
                        <i class="la la-cart-plus"></i> Add to cart
                    </a>






                </div>

            </div>


            <div class="product-tabs clearfix" role="tabpanel">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-expanded="true">Short Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showdesc()" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-expanded="false">Description</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div role="tabpanel" class="tab-pane fade active show" id="home" aria-labelledby="home-tab"
                        aria-expanded="true" data-description>
                        

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                        aria-expanded="false">
                        <p>


                            {{ $data->product_desc }}

                        </p>
                    </div>

                </div>
            </div>


        </article><!-- product-details -->





    </div>



@endsection
