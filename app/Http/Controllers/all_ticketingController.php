<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_ticketing;
use App\Models\setoran_kasir_tiket;

class all_ticketingController extends Controller
{
    public function allticketing(Request $request)
    {
        $reportticketings = all_ticketing::simplePaginate(10);
        $setoranticketings = setoran_kasir_tiket::simplePaginate(10);
        $number = $reportticketings->firstItem();
        $number1 = $setoranticketings->firstItem();
        $selectedKasir= "all";

        if ($request->kasir !== "all" && $request->date == null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::where('kasir','=', $request->kasir)->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::where('kasir','=', $request->kasir)->simplePaginate(10);
         
        } else if ($request->date !== null){
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::where('kasir','=', $request->kasir)->whereDate('created_at',$request->date )->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::where('kasir','=', $request->kasir)->whereDate('created_at',$request->date )->simplePaginate(10);
       
        } 
        
        if ($request->kasir === "all" && $request->date === null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::simplePaginate(10);
        }

        if ($request->kasir === "all" && $request->date !== null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::whereDate('created_at',$request->date )->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::whereDate('created_at',$request->date )->simplePaginate(10);
        }

        return view('main.allticketing', [
            "title" => "Saloka Sales Report | All Ticketing Report",
        ],compact('reportticketings','setoranticketings','number1','number','selectedKasir'));
    }
    
}
