<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edc_global;

class edc_globalController extends Controller
{
    public function edcglobal()
    {
        $reportedcs = edc_global::simplePaginate(10);
        $number = $reportedcs->firstItem();
        return view('main.edcglobal', [
            "title" => "Saloka Sales Report | Laporan EDC Global",
        ],compact('reportedcs','number'));
    }
}
