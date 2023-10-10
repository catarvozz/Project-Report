<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class edcController extends Controller
{
    public function edc()
    {
        return view('main.edc', [
            "title" => "Saloka Sales Report | EDC",
        ]);
    }
}
