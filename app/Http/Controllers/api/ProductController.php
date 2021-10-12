<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
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
        return response()->json(['products' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'user_id' => 'required',
                'category' => 'required',
                'productdesc' => 'required',
                'price' => 'required',

            ]

        );
        // $service_id = Product::latest()->first()->id;
        $data['user_id'] = Auth::id();
        $op = Product::create($data);
        // $user = User::all();
        $op->users()->attach(Auth::id());
        // $user = User::Where('email', Auth::user()->email)->first();
        // Notification::send($user, new AddProduct($service_id));

        

        if ($op) {
            $massge = 'youer register sucsesfully';
        } else {
            $massge = 'youer register error';
        }
        return response()->json(['data' => $data], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
