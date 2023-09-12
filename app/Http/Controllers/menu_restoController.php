<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu_restoran;

class menu_restoController extends Controller
{
    public function menuresto()
    {
        $reportmenus = menu_restoran::simplePaginate(10);
        return view('main.menuresto', [
            "title" => "Saloka Sales Report | Menu",
        ],compact('reportmenus'));
    }

}
