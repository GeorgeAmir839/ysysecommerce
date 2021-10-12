<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\AddProduct;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $products = Product::get();

        return view('product.showproduct', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //image prosses
        $image = $request->file('image');
        $imagename = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imagename);
        
        $data = $this->validate(
            request(),
            [
                
                'qnt' => 'required',
                'brand' => 'required',
                'name' => 'required',
                'category' => 'required',
                'productdesc' => 'required',
                'price' => 'required',
                // 'image' => 'required',
            ]

        );
        // $service_id = Product::latest()->first()->id;
        $data['user_id'] = Auth::id();
        $data['image'] = $imagename;
        // $product_id = Product::latest()->first()->id;
        $op = Product::create($data);
        // $product_id = $op->id;
        // dd($op,$data);
        // $user = User::all();
        $op->users()->attach(Auth::id());
        // $user = User::first();
        // Notification::send($user, new AddProduct($product_id));

        if ($op) {
            return redirect(url('/shop'));
        } else {
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view("product.showsingleproduct", ["product" => $product]);
    }
    public function productPage(Request $request)
    {

        $products = Product::paginate(4);
        return view('front.shop', compact('products'));
    }
    // function fetch_data(Request $request)
    // {
    //  if($request->ajax())
    //  {
    //     $products = Product::paginate(5);
    //     return view('front.shop', compact('products'))->render();
    //  }
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view("product.editproduct", ["data" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        // $product_id = Product::latest()->first()->id;
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'category' => 'required',
                'brand' => 'required',
                'price' => 'required',
                'productdesc' => 'required',
                'qnt' => 'required',

            ]

        );
        // $doctor->fill($data);
        // $doctor->save();
        $op = Product::where('id', $request->id)->update($data);
       
        if ($op) {
            // echo 'ddd';
            return back();
        } else {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $op = $product->delete();

        if ($op) {
            return redirect(url('/product'));
        } else {
            echo "error delete";
        }
    }



    public function productcart(Request $request)
    {

        $id = $request->route('id');
        $data = Product::where(['id' => $id])->first();
        return view('single-product', compact('data'));
    }
    public function search(Request $request)
    {


        $data = Product::where('name', 'LIKE', '%' . $request->input('search') . '%')->get();

        return view('search', ["data" => $data]);
    }
}
