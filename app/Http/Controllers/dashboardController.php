<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;

class dashboardController extends Controller
{
    public function index()
    {
        return view('main.index', [
            "title" => "Saloka Sales Report",
        ]);
    }
}
