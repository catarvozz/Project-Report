<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterPecahanuangs;
use App\Models\content_masteruang;

class master_pecahanuangsController extends Controller
{
    public function masterpecahanuangs()
    {
        return view('main.masteruang', [
            "title" => "Saloka Sales Report | Master Pecahan Uang",
        ]);
    }
    public function formmasterpecahanuangs()
    {
        return view('forms.form_master_pecahanuang', [
            "title" => "Saloka Sales Report | Form Master Items",
        ]);
    }
}
