<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;


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
        return view('auth.showuser', ['users' => $users]);
    }
    /* apiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii */
    /* ############################################################################################################### */
    public function userapi()
    {

        $data = User::get();
        return response()->json(['data' => $data], 200);
    }
    /* ############################################################################################################### */
    /* apiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii */
    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    /* apiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii */
    /* ############################################################################################################### */
    public function storeapi(Request $request)
    {




        $op = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,


        ]);
        $massge = '';

        if ($op) {
            $massge = 'youer register sucsesfully';
        } else {
            $massge = 'youer register error';
        }
        return response()->json(['massege' => $massge], 200);
    }
    /* ############################################################################################################### */
    /* apiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {


        return view("auth.showsingleuser", ["data" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("auth.edituser", ["data" => $user]);
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
        dd($user);
        $data = $this->validate(
            request(),
            [
                "username" => 'required|min:5|max:20',
                'email' => 'required',
                // "gender"=>$request["gender"],
                "city" => 'required',
                "address" => 'required',
                "phone" => 'required',
                "role" => 'required',
            ]
        );
        // dd($data);
        $op = $user->update($data);
        if ($op) {
            // echo 'ddd';
            return back();
        } else {
            echo "error";
        }

        // $user->fill([
        //     "username"=>$request["username"],
        //     "email"=>$request["email"],
        //     "city"=>$request["city"],
        //     "address"=>$request["address"],
        //     "phone"=>$request["phone"],
        //     "city"=>$request["city"],
        //     "role"=>$request["role"],
            
        // ]);
        
        // $user->save();
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = User::findorfail($id);
        if ($data) {
            return view('auth.deleteuser', ['data' => $data]);
        } else {
            return back();
        }
    }

    public function destroy(User $user)
    {
        
        $user->delete();
        return redirect(url('/register'));
    }
}
