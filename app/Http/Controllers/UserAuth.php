<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function UserLogin(Request $request){
        return $request->input();
    }
}
