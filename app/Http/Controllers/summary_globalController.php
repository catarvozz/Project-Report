<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\summary_global;

class summary_globalController extends Controller
{
    public function revenuesummary()
    {
        $summaryglobals = summary_global::simplePaginate(10);
        $number = $summaryglobals->firstItem();
        return view('main.revenuesummary', [
            "title" => "Saloka Sales Report | Revenue Summary Global",
        ],compact('summaryglobals','number'));
    }
}

// public function allglobal()
// {
//     $reportglobals = all_global::simplePaginate(2);
//     $number = $reportglobals->firstItem();
//     return view('main.allglobal', [
//         "title" => "Saloka Sales Report | Laporan All Global",

//     ],compact('reportglobals','number'));
// }