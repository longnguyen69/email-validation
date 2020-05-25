<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function validationEmail(Request $request){
        // lay du lieu tu url
        $email = $request->email;
        $isEmail = true;

        // kiem tra email theo hafm mac dinh cua thu vien PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $isEmail = false;
        }
        return view('index', compact('isEmail'));
    }
}
