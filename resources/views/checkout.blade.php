@extends('layouts.frontend')

@section('home')
    <div class="content">

        <div class="container">
            <div class="thickline"></div>
        </div>




        <div class="container">


            <div class="row">
                <div class="col-12">


                    <div class="container nicocheckout">

                        <div>
                            <div>

                                <div class="error"></div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>حجز المنتج او سعلة </h3>
                                    </div>
                                </div>
                                <form action="{{ url('/store') }}" method="post">
                                    @csrf

                                    <div class="row box checkout_form">
                                        <div class="col-md-6 register_block">
                                            <div class="row">



                                                <div class="form-group col-md-12">
                                                    <br />
                                                    <strong class="clearfix"> ايرجي اضافة بعض المعلومات الشخصية
                                                        الاضافية لتوصيل الطلب</strong>
                                                </div>


                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label" for="input-payment-firstname">الاسم
                                                        الاول</label>
                                                    <input name="firstname" disabled value="{{ $user->username }}"
                                                        placeholder="الاسم الاول" id="input-payment-firstname"
                                                        class="form-control" type="text">
                                                </div>

                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label" for="input-payment-email">البريد
                                                        الالكتروني</label>
                                                    <input name="email" disabled value="{{ $user->email }}"
                                                        placeholder="البريد الالكتروني " id="input-payment-email"
                                                        class="form-control" type="text">
                                                </div>
                                                <div class="form-group required  col-md-6">
                                                    <label class="form-control-label"
                                                        for="input-payment-telephone">الهاتف</label>
                                                    <input name="telephone1" disabled value="{{ $user->phone }}"
                                                        placeholder="الهاتف" id="input-payment-telephone"
                                                        class="form-control" type="text">
                                                </div>

                                                <div class="form-group required  col-md-6">
                                                    <label class="form-control-label"
                                                        for="input-payment-telephone">الهاتف</label>
                                                    <input name="telephone2" value="" placeholder="الهاتف"
                                                        id="input-payment-telephone" class="form-control" type="text">
                                                </div>
                                                <div class="form-group required col-md-12">
                                                    <label class="form-control-label" for="input-payment-address-1">عنوان
                                                        الاول </label>
                                                    <input name="address_1" value="" placeholder="عنوان الاول "
                                                        id="input-payment-address-1" class="form-control" type="text">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label" for="input-payment-address-2">عنوان
                                                        الثاتي</label>
                                                    <input name="address_2" value="" placeholder="عنوان الثاتي"
                                                        id="input-payment-address-2" class="form-control" type="text">
                                                </div>

                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label" for="input-payment-country">اسم
                                                        الدولة</label>
                                                    <input name="country_name" value="" placeholder="اسم الدولة"
                                                        id="input-payment-address-2" class="form-control" type="text">

                                                </div>

                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label"
                                                        for="input-payment-zone">المحافظة</label>
                                                    <input name="country_state" value="" placeholder="المحافظة"
                                                        id="input-payment-address-2" class="form-control" type="text">
                                                </div>


                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label"
                                                        for="input-payment-city">المدينة</label>
                                                    <input name="city" value="" placeholder="المدينة"
                                                        id="input-payment-city" class="form-control" type="text">
                                                </div>

                                                <div class="form-group required col-md-6">
                                                    <label class="form-control-label" for="input-payment-postcode">رقم
                                                        البريد</label>
                                                    <input name="postcode" value="" placeholder="رقم البريد"
                                                        id="input-payment-postcode" class="form-control" type="text">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            @php
                                                $total = 0;
                                            @endphp
                                            <div class="shipping-method">
                                                <p>من فضلك اختار وسيلة الشحن </p>
                                                <p><strong>اسعار الشحن </strong></p>
                                                <div class="radio">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio1" class="custom-control-input"
                                                            name="shipping_method" value="flat.flat"
                                                            title="Flat Shipping Rate" checked="checked" type="radio"><span
                                                            class="custom-control-label"></span>
                                                        <span class="custom-control-description">مبلغ الشحن عند الاستلام هو
                                                            : 10دولار</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="your_order">
                                                <strong>Shopping Cart</strong>
                                                <table id="cart_table" class="table table-hover table-bordered" data-cart>
                                                    <thead>
                                                        <tr>
                                                            <th class="text-xs-left">المنتج</th>
                                                            <th class="text-xs-right hidden-xs">الكمية</th>
                                                            <th class="text-xs-right hidden-xs">سعر المنتج </th>
                                                            <th class="text-xs-right">الاجمالي</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cart as $dataCart)
                                                            <tr data-product>

                                                                <td class="text-xs-left hidden-xs">{{ $dataCart->name }}
                                                                </td>
                                                                <td class="text-xs-right hidden-xs">{{ $dataCart->qnt }}
                                                                </td>
                                                                <td class="text-xs-right hidden-xs">{{ $dataCart->price }}
                                                                </td>

                                                                <td>$ {{ $dataCart->price * $dataCart->qnt }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <thead>
                                                        @foreach ($cart as $dataCart)

                                                            {{-- {{  $data->price }} --}}
                                                            @php
                                                                $total += $dataCart->qnt * $dataCart->price;
                                                            @endphp

                                                        @endforeach
                                                        <tr>
                                                            <td colspan="4" class="text-center">Total $
                                                                {{ $total }}</td>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>

                                                    </tfoot>

                                                </table>

                                                <br>



                                                <div class="payment-method">
                                                    <p>وسائل متاحة للدفع : </p>


                                                    <div class="radio">

                                                        <label class="custom-control custom-radio">
                                                            <h5 class="custom-control-description">الدفع عند الاستلام</h5>
                                                        </label>

                                                    </div>
                                                </div>

                                                <p><strong>يرجي اضافة ملاحاظاتك خلال التسليم </strong></p>
                                                <p>
                                                    <textarea name="comment" rows="3" class="form-control"></textarea>
                                                </p>
                                                <div class="buttons clearfix">
                                                    <div class="float-xs-right">
                                                        في حالة الموافقة يرجي التاكيد
                                                        <a href="#" class="agree"><b> مع مراجعة شروط
                                                                والاحكام</b></a>
                                                        <input name="agree" value="1" type="checkbox">
                                                        &nbsp;
                                                    </div>
                                                </div>

                                                <div class="payment float-xs-right clearfix">
                                                    <input class="btn btn-primary" data-loading-text="Loading..."
                                                        id="button-register" value="حجز" type="submit">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>


            </div>

        </div>

    @endsection
