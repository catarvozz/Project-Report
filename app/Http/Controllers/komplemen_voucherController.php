<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komplemen_voucher;

class komplemen_voucherController extends Controller
{
    public function komplemendanvoucher()
    {
        $reportkomplemenvcs = komplemen_voucher::simplePaginate(10);
        $number = $reportkomplemenvcs->firstItem();
        return view('main.komplemendanvoucher', [
            "title" => "Saloka Sales Report | Komplemen & Voucher",
        ],compact('reportkomplemenvcs','number'));
    }
}
