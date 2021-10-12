<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Access\Gate;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] = Check::all();
        //        return view('admin/category', $result);
        //        $data = Check::all();
        return view('admin/orders', $result);
    }
    //
    public function ShowCart()
    {

        $user_id = Auth::id();
        $user = Auth::user();
        //    Notification::send($user, new AddService($service_id));
        $cart = Cart::where('user_id', $user_id)->get();
        $count = Cart::where('user_id', $user_id)->count();
        if ($count == 0) {
            return redirect(url('/shop'));
        } else
            return view('checkout', ['cart' => $cart, 'user' => $user]);
    }

    public function store(Request $request)
    {

        $user = Auth::user();
        
        $cart = Cart::all();
        $product_name = '';
        $product_price = '';
        $qnt = 1;

        $total = 1;
        $sub_total = '';
        foreach ($cart as $data) {
            $product_name .= $data->name . '|';
            $product_price .= $data->price  .   '|';
            $qnt .= $data->qnt  .   '|';
            $total += $data->price * $data->qnt;
        }
    
        $Check = new Check();
        $Check->username = $user->username;
        $Check->email = $user->email;
        $Check->number1 = $user->phone;
        $Check->number2 = $request->telephone2;
        $Check->address1 = $request->address_1;
        $Check->address2 = $request->address_2;
        $Check->country = $request->country_name;
        $Check->state = $request->country_state;
        $Check->city = $request->city;
        $Check->post = $request->postcode;
        $Check->cart_name = $product_name;
        $Check->qnt = $qnt;
        $Check->cart_price = $product_price;
        $Check->total = $total;
        $Check->cart_subtotal = $sub_total;
        $Check->comment = $request->comment;


        $Check->save();
        $user_id = Auth::id();
        $cartdelete = Cart::where('user_id', $user_id)->delete();
        // $cartdelete->delete();
        return redirect('shop');



        /*
         * $table->string('cart_name');
                    $table->string('cart_qnt');
                    $table->string('cart_price');
                    $table->string('cart_subtotal');
         * */
    }
}
