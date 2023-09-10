<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_global;

class all_globalController extends Controller
{
    public function allglobal()
    {
        $reportglobals = all_global::simplePaginate(20);
        $number = $reportglobals->firstItem();
        return view('main.allglobal', [
            "title" => "Saloka Sales Report | Laporan All Global",

        ],compact('reportglobals','number'));
    }
}