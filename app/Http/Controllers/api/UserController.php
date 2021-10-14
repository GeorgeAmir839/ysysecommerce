<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    { 
        
        
        
        $users = User::get();
        return response()->json(['users' => $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,


        ]);
        $massge = '';

        if ($users) {
            $massge = 'youer register sucsesfully';
        } else {
            $massge = 'youer register error';
        }
        return response()->json(['users' => $users], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
        // return User::find($user->id);
        return response()->json(['user' => $user], 200);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        dd($request);
        $user->fill([
            "username" => $request["username"],
            "email" => $request["email"],
            "password"=>$user->password,
            "gender"=>$user->gender,
            "city" => $request["city"],
            "address" => $request["address"],
            "phone" => $request["phone"],
            "role" => $request["role"],
        ]);
        $user->save();
        return redirect(url('/user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->delete()){
        // return redirect(url('/register'));
        dd('done');
        }else{
            dd('dd');
        }
        
    }
    public function login(Request $request)
    {
        $user_id = Auth::id();
        $user= User::where('email', $request->email)->first();
        $cart = Cart::where('user_id', $user_id)->get();
        $count = Cart::where('user_id', $user_id)->count();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
            'cart'=>$cart,
            'count'=>$count
        ];

        return response($response);
    }
}
