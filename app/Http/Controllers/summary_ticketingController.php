<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\summary_ticketing;

class summary_ticketingController extends Controller
{
    public function summaryticketing()
    {
        $reportsummaryticketings = summary_ticketing::simplePaginate(10);
        // $number = $reportsummaryticketings->firstItem();
        return view('main.summaryticketing', [
            "title" => "Saloka Sales Report | Summary Ticketing",
        ],compact('reportsummaryticketings'));
    }
}
