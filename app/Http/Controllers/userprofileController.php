<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userprofile;

class userprofileController extends Controller
{
    public function userprofile()
    {
        return view('main.userprofile', [
            "title" => "Saloka Sales Report | Profile",
        ]);
    }
}
