<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterItems;
use App\Models\content_masteritems;


class master_itemsController extends Controller
{
    public function masteritems()
    {
        return view('main.masteritems', [
            "title" => "Saloka Sales Report | Master Items",
        ]);
    }
    public function formmasteritems()
    {
        return view('forms.form_master_items', [
            "title" => "Saloka Sales Report | Form Master Items",
        ]);
    }
}
