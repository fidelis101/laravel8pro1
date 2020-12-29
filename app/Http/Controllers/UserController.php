<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->fullUrl();
        // $name = 'Prime';
        // $users = array(
        //     'name'=>"Fidelis Ugwu",
        //     "email"=>"sirp@gmail.com",
        //     "phone"=>"08093852487"
        // );
        // return view('user',compact('name','users'));
    }
}
