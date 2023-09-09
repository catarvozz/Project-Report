<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logout;

class logoutController extends Controller
{
    public function login()
    {
        return view('login.login', [
            "title" => "Saloka Sales Report | Login",
        ]);
    }
}
