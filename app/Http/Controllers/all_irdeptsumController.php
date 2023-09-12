<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_irdeptsum;

class all_irdeptsumController extends Controller
{
    public function allirdeptsummary()
    {
        $reportsumirdepts = all_irdeptsum::simplePaginate(10);
        $number = $reportsumirdepts->firstItem();
        return view('main.allirdeptsummary', [
            "title" => "Saloka Sales Report | All IR Dept Summary Report",
        ],compact('reportsumirdepts','number'));
    }
}
