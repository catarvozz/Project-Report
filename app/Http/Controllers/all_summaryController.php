<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_summary;
use App\Models\total_uang_allsummary;

class all_summaryController extends Controller
{
    public function allsummary()
    {
        $reportsummarys = all_summary::simplePaginate(10);
        $reporttotalsummarys = total_uang_allsummary::simplePaginate(10);
        return view('main.allsummary', [
            "title" => "Saloka Sales Report | All Summary Report",
        ],compact('reportsummarys','reporttotalsummarys'));
    }
}
