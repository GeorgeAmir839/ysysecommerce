{{-- tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt --}}



@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

@section('title')
    Products
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">product</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                product</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('Add'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="fas fa-plus-circle"></i>
        <strong class="p-2">{{ session()->get('Add') }}</strong>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span class="p-2" aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('delete'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>

        <strong class="p-2">{{ session()->get('delete') }}</strong>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('edit'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
            <use xlink:href="#info-fill" />
        </svg>

        <div>
            <strong class="p-2">{{ session()->get('edit') }}</strong>
            <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

@endif
<!-- row -->
<div class="row">


    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                        data-toggle="modal" href="#modaldemo8">اضافة قسم</a>

                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">id</th>
                                <th class="border-bottom-0">name</th>
                                <th class="border-bottom-0">category </th>
                                <th class="border-bottom-0">imag </th>
                                <th class="border-bottom-0">productdescribtion</th>
                                <th class="border-bottom-0">price</th>
                                <th class="border-bottom-0">Action</th>
                                {{-- <th class="border-bottom-0">created_at</th>
                                <th class="border-bottom-0">updeated_at</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 0;
                            @endphp
                            @foreach ($products as $index => $product)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product->id }} </td>
                                    <td>{{ $product->name }} </td>
                                    <td>{{ $product->category }}</td>
                                    <td><img class="card-img-top" style="border-radius: 12px;" height="100px"
                                            src="{{ asset('images/' . $product->image) }}" alt="Card image"
                                            style="width:30%"></td>

                                    <td>{{ $product->productdesc }}</td>
                                    <td>{{ $product->price }}</td>
                                    {{-- <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td> --}}


                                    <td>

                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                            data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}"
                                            data-productdesc="{{ $product->productdesc }}"
                                            data-brand="{{ $product->brand }}"
                                            data-price="{{ $product->price }}"
                                            data-qnt="{{ $product->qnt }}"
                                            data-category="{{ $product->category }}"
                                            data-toggle="modal"
                                            href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>

                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                            data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}" data-toggle="modal"
                                            href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="modaldemo8">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">اضافة قسم</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/product') }}" method="post" novalidate enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">name op product</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category" required>
                                <option value="" required="required" disabled selected>category product</option>
                                <option value="mopile">mopile</option>
                                <option value="elctronic">elctronic</option>
                                <option value="tv">tv</option>
                                <option value="laptop">laptop</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="brand" required>
                                {{-- @foreach (App\Models\Brand::all() as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach --}}
                                <option value="" required="required" disabled selected>select u brand</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Sony">Sony</option>
                                <option value="OPPO">OPPO</option>
                                <option value="Anther">Anther</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>
                        <div class="form-group">
                            <label for="product_image" class="control-label mb-1">Product Image</label>
                            <input id="product_image" name="image" type="file" class="form-control"
                                onchange="previewfile(this)" required>
                            <img id="image" style="max-width:130px;margin-top:20px" />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">please enter image</div>
                        </div>
                        <div class="form-group">
                            <label for="service">product productdesc</label>
                            <textarea class="form-control" rows="5" id="service" name="productdesc"></textarea>
                            حأدخل وصف الخدمة بدقة يتضمن جميع المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف
                            أو أي
                            معلومات اتصال أخرى.
                        </div>
                        <div class="form-group ">
                            <label for="sname ">سعرالخدمة</label>
                            <input type="number" class="form-control" id="sname" placeholder="ادخل سعرالخدمة"
                                name="price" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>
                        <div class="form-group ">
                            <label for="sname ">كمية المنتج</label>
                            <input type="number" class="form-control" id="sname" placeholder="ادخل سعرالخدمة"
                                name="qnt" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Basic modal -->


    </div>
    <!-- edit -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل المنتج</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/product/' . $product->id) }}" method="post" autocomplete="off">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="recipient-name" class="col-form-label">اسم المنتج:</label>
                            <input class="form-control" name="name" id="name" value=""
                                type="text">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category" id="category" required>
                                <option value="" required="required" disabled selected>category product</option>
                                <option value="mopile">mopile</option>
                                <option value="elctronic">elctronic</option>
                                <option value="tv">tv</option>
                                <option value="laptop">laptop</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="brand" id="brand" required>
                                {{-- @foreach (App\Models\Brand::all() as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach --}}
                                <option value="" required="required" disabled selected>select u brand</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Sony">Sony</option>
                                <option value="OPPO">OPPO</option>
                                <option value="Anther">Anther</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>

                        <div class="form-group">
                            <label for="service">product productdesc</label>
                            <textarea class="form-control" rows="5" id="service" id="productdesc" name="productdesc"
                                value="{{ $product->productdesc }}"></textarea>
                            حأدخل وصف الخدمة بدقة يتضمن جميع المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف
                            أو أي
                            معلومات اتصال أخرى.
                        </div>
                        <div class="form-group ">
                            <label for="sname ">سعرالخدمة</label>
                            <input type="number" class="form-control" id="price" placeholder="ادخل سعرالخدمة"
                                name="price" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>
                        <div class="form-group ">
                            <label for="sname ">كمية المنتج</label>
                            <input type="number" class="form-control" id="qnt" placeholder="ادخل سعرالخدمة" name="qnt"
                                required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">سعرٍالخدمة</div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تاكيد</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- delete -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ url('/product/' . $product->id) }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="name" id="name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>




    <!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>

<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var category = button.data('category')
        var brand = button.data('brand')
        var price = button.data('price')
        var productdesc = button.data('productdesc')
        var qnt = button.data('qnt')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #category').val(category);
        modal.find('.modal-body #brand').val(brand);
        modal.find('.modal-body #price').val(price);
        modal.find('.modal-body #qnt').val(qnt);
        modal.find('.modal-body #productdesc').val(productdesc);
    })

    function previewfile(input) {
        var file = $("input[type=file]").get(0).files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                $('#image').attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var name = button.data('name')
        var category = button.data('category')
        var brand = button.data('brand')
        var price = button.data('price')
        var productdesc = button.data('productdesc')
        var qnt = button.data('qnt')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #category').val(category);
        modal.find('.modal-body #brand').val(brand);
        modal.find('.modal-body #price').val(price);
        modal.find('.modal-body #qnt').val(qnt);
        modal.find('.modal-body #productdesc').val(productdesc);
    })
</script>

@endsection
