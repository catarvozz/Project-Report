<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masterkategoriController extends Controller
{
    public function masterkategori()
    {
        return view('main.masterkategori', [
            "title" => "Saloka Sales Report | Master Kategori",
        ]);
    }
    public function formmasterkategori()
    {
        return view('forms.form_master_kategori', [
            "title" => "Saloka Sales Report | Form Master Kategori",
        ]);
    }
}
