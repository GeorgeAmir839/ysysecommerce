
@extends('layouts.style')

@section('content')




    <div class="mt-5" style="min-height: 50px"></div>
    <div class="part mt-5">
        <h2 class="text-center" style="color:rgb(165, 11, 165);">Add Product ..</h2>

        <form action="{{ url('/product') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            {{ $user_id = Auth::id() }}
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <div class="form-group">
                <label for="sname">name of product</label>
                <input type="text" class="form-control" id="sname" placeholder="name of product  " name="name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">name of product</div>
            </div>
            
            <div class="form-group">
                <select class="form-control" name="category" required>
                    <option value="" required="required" disabled selected>category product</option>
                    <option value="mopile">mopile</option>
                    <option value="elctronic">elctronic</option>
                    <option value="tv">tv</option>
                    <option value="laptop">laptop</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">سعرٍالخدمة</div>
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
                <input id="product_image" name="image" type="file" class="form-control" onchange="previewfile(this)" required>
                <img id="image" style="max-width:130px;margin-top:20px"/>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">please enter image</div>
            </div>
            <div class="form-group">
                <label for="service">product description</label>
                <textarea class="form-control" rows="5" id="service" name="productdesc"></textarea>
                حأدخل وصف الخدمة بدقة يتضمن جميع المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف أو أي
                معلومات اتصال أخرى.
            </div>


            <div class="form-group ">
                <label for="sname ">سعرالخدمة</label>
                <input type="number" class="form-control" id="sname" placeholder="ادخل سعرالخدمة" name="price" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">سعرٍالخدمة</div>
            </div>
            <div class="form-group ">
                <label for="sname ">كمية المنتج</label>
                <input type="number" class="form-control" id="sname" placeholder="ادخل سعرالخدمة" name="qnt" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">سعرٍالخدمة</div>
            </div>
            
            <button type="submit" class="btn btn-primary">add</button>
        </form>
    </div>


    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();   
        function previewfile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader= new FileReader();
                reader.onload=function(){
                    $('#image').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
   

    </body>

    </html>

@endsection
