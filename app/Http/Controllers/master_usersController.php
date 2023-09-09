<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masterUsers;

class master_usersController extends Controller
{
    public function formmasterusers()
    {
        return view('forms.form_master_users', [
            "title" => "Saloka Sales Report | Form Master User",
        ]);
    }
}
