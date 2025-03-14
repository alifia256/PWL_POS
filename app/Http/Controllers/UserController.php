<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'name'=> 'Manager11',
                'password'=>Hash::make('12345'),
                'level_id'=> 2
            ]
        );
        $user->username = 'manager12';

        $user->save();

        $user->wasChanged(); //true
        $user->wasChanged('username'); //true
        $user->wasChanged(['username','level_id']); //true
        $user->wasChanged('name'); //false
        dd($user->wasChanged(['name','username'])); //true

    }
}

