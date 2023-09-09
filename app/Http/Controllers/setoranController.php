<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setoran;

class setoranController extends Controller
{
    public function setoran()
    {
        $reportsetorans = setoran::simplePaginate(10);
        return view('main.setoran', [
            "title" => "Saloka Sales Report | Laporan Setoran",
        ],compact('reportsetorans'));
    }
}
