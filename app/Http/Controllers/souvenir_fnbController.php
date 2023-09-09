<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\souvenir_fnb;

class souvenir_fnbController extends Controller
{
    public function souvenirfnb(Request $request)
    {
        $reportsouvenirfnbs = souvenir_fnb::simplePaginate(10);
        $number = $reportsouvenirfnbs->firstItem();
        $selectedStore= "all";

        if ($request->store !== "all") {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::where('store','like', '%' . $request->store . '%')->simplePaginate(10);
        }

        return view('main.souvenirfnb', [
            "title" => "Saloka Sales Report | Souvenir & FnB",
        ],compact('reportsouvenirfnbs','number', 'selectedStore'));
    }
}

// public function allticketing(Request $request)
//     {
//         $reportticketings = all_ticketing::simplePaginate(10);
//         $number = $reportticketings->firstItem();
//         $selectedKasir= "all";

        // if ($request->kasir !== "all") {
        //     $selectedKasir=$request->kasir;
        //     $reportticketings = all_ticketing::where('kasir','like', '%' . $request->kasir . '%')->simplePaginate(10);
        // }
        // return view('main.allticketing', [
        //     "title" => "Saloka Sales Report | Laporan All Ticketing",
        // ],compact('reportticketings','reporttotaltipembayarans','number_total','number','selectedKasir'));
//     }
