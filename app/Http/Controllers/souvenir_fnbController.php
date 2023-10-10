<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\souvenir_fnb;
use App\Models\setoran;

class souvenir_fnbController extends Controller
{
    public function souvenirfnb(Request $request)
    {
        $reportsouvenirfnbs = souvenir_fnb::simplePaginate(10);
        $setoransouvenirfnbs = setoran::simplePaginate(10);
        $number = $reportsouvenirfnbs->firstItem();
        $number1 = $setoransouvenirfnbs->firstItem();
        $selectedStore= "all";
        
        if ($request->store !== "all" && $request->date == null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::where('store','=', $request->store)->simplePaginate(10);
            $setoransouvenirfnbs = setoran::where('store','=', $request->store)->simplePaginate(10);
         
        } else if ($request->date !== null){
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::where('store','=', $request->store)->whereDate('created_at',$request->date )->simplePaginate(10);
            $setoransouvenirfnbs = setoran::where('store','=', $request->store)->whereDate('created_at',$request->date )->simplePaginate(10);
       
        } 
        
        if ($request->store === "all" && $request->date === null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::simplePaginate(10);
            $setoransouvenirfnbs = setoran::simplePaginate(10);
        }

        if ($request->store === "all" && $request->date !== null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::whereDate('created_at',$request->date )->simplePaginate(10);
            $setoransouvenirfnbs = setoran::whereDate('created_at',$request->date )->simplePaginate(10);
        }

        return view('main.souvenirfnb', [
            "title" => "Saloka Sales Report | Souvenir & FnB",
        ],compact('reportsouvenirfnbs','number', 'selectedStore','setoransouvenirfnbs'));
    }
}