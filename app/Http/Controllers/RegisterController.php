<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionregister(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required|string',
            'address' => 'string',
            'phone' => 'required|string',
            'driver_license' =>  'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::create($input);

        Session::flash('message', 'Register berhasil, silahkan lakukan login');
        return redirect('register');
    }
}
