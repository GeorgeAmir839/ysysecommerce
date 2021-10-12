@extends('layouts.frontend')

@section('home')
    <div class="cart-margin" style="margin: 200px 0px">
        <div class="content">

            <div class="container">
                <div class="thickline"></div>
            </div>


            <div class="container">
                <a href="#" class="notification">
                    <span>Inbox</span>
                    <span class="badge">{{ $count }}</span>
                </a>


                <div class="row">
                    <div class="col-12">

                        {{-- <form action="" method="post" enctype="multipart/form-data"> --}}
                            {{-- @csrf --}}
                            <div class="table-responsive">
                                <table class="table table-bordered" data-cart>
                                    <thead>
                                        <tr>
                                            <td class="text-left">المنتج</td>
                                            <td class="text-left">الكمية </td>
                                            <td class="text-right">سعر الوحدة </td>
                                            <td class="text-right">الاجمالي</td>
                                            <td class="text-right">Action</td>


                                        </tr>

                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($cart as $data)
                                            <tr data-product>
                                                <td class="text-left"><a
                                                        href="https://demo.opencart.com/index.php?route=product/product&amp;product_id=40"
                                                        data-name> {{ $data->name }}</a>
                                                </td>
                                                <td class="text-left">
                                                    {{ $data->qnt }}
                                                </td>
                                                <td class="text-right">$ {{ $data->price }}</td>
                                                <td>$ {{ $data->price * $data->qnt }}</td>

                                                <form action="{{ url('/carts/' . $data->id) }}" method="post">
                                                    @csrf
                                                    @method("delete")
                                                    <td>
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </td>
                                                </form>

                                            </tr>

                                        @endforeach



                                    </tbody>

                                    <thead>
                                        @foreach ($cart as $data)

                                            {{-- {{  $data->price }} --}}
                                            @php
                                                $total += $data->price * $data->qnt;
                                            @endphp

                                        @endforeach
                                        <tr>
                                            <td colspan="4" class="text-center">Total $ {{ $total }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        {{-- </form> --}}
                        <a href="{{ url('/shop') }}" class="btn btn-primary text-left"> اختيار نوع اخر من الشراء </a>

                        <a href="{{ url('/checkout') }}" class="btn btn-danger text-right"> التوجه الي الدفع</a>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection
