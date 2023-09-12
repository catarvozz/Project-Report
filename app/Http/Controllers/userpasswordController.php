<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userpassword;

class userpasswordController extends Controller
{
    public function userpassword()
    {
        return view('forms.form_edit_user_password', [
            "title" => "Saloka Sales Report | Ganti Password",
        ]);
    }
}
