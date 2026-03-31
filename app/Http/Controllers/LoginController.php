<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        $email = $req->input("email");
        $password = $req->input("password");

        if (Auth::attempt(
            [
                "email" => $email,
                "password" => $password
            ]
        )) {

            return redirect()->intended()->with("success", "Successfully connected");
        }

        return redirect("/")->with("error","Crédentials non valides");
    }
}
