<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_ticketing;
use App\Models\total_tipe_pembayaran;
use App\Models\setoran_kasir_tiket;
use App\Models\nilai_uang;

class all_ticketingController extends Controller
{
    public function allticketing(Request $request)
    {
        $reportticketings = all_ticketing::simplePaginate(10);
        $reporttotaltipembayarans = total_tipe_pembayaran::simplePaginate(10);
        $reportsetorankasirtikets = setoran_kasir_tiket::simplePaginate(10);
        $number = $reportticketings->firstItem();
        $number_total = $reporttotaltipembayarans->firstItem();
        $selectedKasir= "all";

        if ($request->kasir !== "all") {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::where('kasir','like', '%' . $request->kasir . '%')->simplePaginate(10);
        }
        return view('main.allticketing', [
            "title" => "Saloka Sales Report | All Ticketing Report",
        ],compact('reportticketings','reporttotaltipembayarans','reportsetorankasirtikets','number_total','number','selectedKasir'));
    }
    
}
