<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterPecahanuangs;

class master_pecahanuangsController extends Controller
{
    public function formmasterpecahanuangs()
    {
        return view('forms.form_master_pecahanuang', [
            "title" => "Saloka Sales Report | Form Master Pecahan Uang",
        ]);
    }
}
