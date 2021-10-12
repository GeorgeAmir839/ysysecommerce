<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
        DB::table('users')->insert([
            'fname' => 'John Doe',
            'lname' => 'John Doe',
            'email' => 'john@doe.com',
            'gender'=>'male',
            'gender'=>'male',
            'city'=>'Luxor',
            'service'=>'true',
            'address'=>'Luxor',
            'phone'=>'1223333',
            'password' => Hash::make('password')
        ]);
    }
}
