<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function store(UserRequest $request){

        $user = new User([
            'name'         => $request->name,
            'lastname'     => $request->lastname,
            'nationalcode' => $request->nationalcode,
            'mobile'       => $request->mobile,
            'username'     => $request->username,
            'password'     => $request->password,
            'addres'       => $request->addres
        ]);
        $user->save();

    }
}
