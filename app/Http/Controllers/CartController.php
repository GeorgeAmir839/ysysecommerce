<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function AddCart(Request  $request)
    {
        if (Auth::user()) {
            $id = $request->route('id');
            $product = DB::table('products')->where('id', $id)->first();
            // dd($product->id);
            // dd($product->qnt);
            $data = array(
                'product_id' => $product->id,
                'name' => $product->name, 'qnt' => $product->qnt, 'category' => $product->category,
                'qty' => 1, 'weight' => 1, 'price' => $product->price,'image' => $product->image
            );

            $data['user_id'] = Auth::id();
            $op = Cart::create($data);
            if ($op) {

                return redirect(url('/cart'));
            } else {
                echo "error";
            }
        } else {
            return redirect(url('/login'));
        }
    }
    // public function chickcountcard(){
    //     $cart = Cart::all();
    //     if(Auth::user()==$cart->user_id){

    //     }
    // }
    public function ShowCart()
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)->get();
        $count = Cart::where('user_id', $user_id)->count();

        return view('cart', ['cart' => $cart, 'count' => $count]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cart::get();
        return view('cart.showcart', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return view("cart.showsinglecart", ["data" => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return view("cart.editcart", ["data" => $cart]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'qnt' => 'required',
                'category' => 'required',
                'price' => 'required',
                'specialization' => 'required',

            ]

        );
        // $cart->fill($data);
        // $cart->save();
        $op = Cart::where('id', $request->id)->update($data);
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
       
        $cart->delete();
        return back();
    }
}
