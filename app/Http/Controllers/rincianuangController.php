<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rincianuang;

class rincianuangController extends Controller
{
    public function rincianuang()
    {
        return view('main.rincianuang', [
            "title" => "Saloka Sales Report | Rincian Uang",
        ]);
    }
}
