<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterUsers;
use App\Models\content_masterusers;

class master_usersController extends Controller
{
    public function masterusers()
    {
        return view('main.masterusers', [
            "title" => "Saloka Sales Report | Master User",
        ]);
    }
    public function formmasterusers()
    {
        return view('forms.form_master_users', [
            "title" => "Saloka Sales Report | Form Master User",
        ]);
    }
}
