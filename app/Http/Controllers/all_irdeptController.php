<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_irdept;

class all_irdeptController extends Controller
{
    public function allirdept()
    {
        $reportirdepts = all_irdept::simplePaginate(10);
        $number = $reportirdepts->firstItem();
        return view('main.allirdept', [
            "title" => "Saloka Sales Report | Laporan All IR Dept",
        ],compact('reportirdepts','number'));
    }
}
