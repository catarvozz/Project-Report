<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterItems;

class master_itemsController extends Controller
{
    public function formmasteritems()
    {
        return view('forms.form_master_items', [
            "title" => "Saloka Sales Report | Form Master Items",
        ]);
    }
}
