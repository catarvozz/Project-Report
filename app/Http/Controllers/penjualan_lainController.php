<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjualan_lain;
use App\Models\setoran_penjualanlain;
use Carbon\Carbon;

class penjualan_lainController extends Controller
{
    public function index()
    {
        $currentdate= Carbon::now()->toDateString();
        $reportpenjualanlains = penjualan_lain::simplePaginate(10);
        $reportsetoranpenjualanlains = setoran_penjualanlain::whereDate('created_at', $currentdate)->simplePaginate(12);
        $number = $reportpenjualanlains->firstItem();
        return view('main.penjualanlain', [
            "title" => "Saloka Sales Report | Penjualan Lain",
        ],compact('reportpenjualanlains','number','reportsetoranpenjualanlains'));
    }

    public function penjualanlaininsert()
    {
        return view('forms.form_insert_setoran', [
            "title" => "Saloka Sales Report | Form Setoran Penjualan Lain",
        ]);
    }
    public function penjualanlainstore(Request $request) {
    $data = $request->validate([
        'qty_100000' => ['nullable', 'string'],
        'qty_75000' => ['nullable', 'string'],
        'qty_50000' => ['nullable', 'string'],
        'qty_20000' => ['nullable', 'string'],
        'qty_10000' => ['nullable', 'string'],
        'qty_5000' => ['nullable', 'string'],
        'qty_2000' => ['nullable', 'string'],
        'qty_1000' => ['nullable', 'string'],
        
    ]);

    $insertData = [];

    foreach ($data as $inputName => $inputValue) {
        if (str_starts_with($inputName, 'qty_')) {
            $nilai_uang = str_replace('qty_', '', $inputName);
            $insertData[] = [
                'nilai_uang' => $nilai_uang,
                'jumlah' => $inputValue,
                'keterangan' => "kertas",
            ];
        }
    }
    setoran_penjualanlain::insert($insertData);

    $datakoin = $request->validate([
        'qty_1000_koin'  => ['nullable', 'string'],
        'qty_500' => ['nullable', 'string'],
        'qty_200' => ['nullable', 'string'],
        'qty_100' => ['nullable', 'string'],
    ]);

    $insertDatakoin = [];

    foreach ($datakoin as $inputName => $inputValue) {
        $nilai_uang = str_replace('qty_', '', $inputName);
        $nilai_uang1 = str_replace('_koin', '', $nilai_uang);

        $qtyInputName = 'qty_' . $nilai_uang;
        $qtyValue = $datakoin[$qtyInputName] ?? null;
       
        $insertDatakoin[] = [
            'nilai_uang' => $nilai_uang1,
            'jumlah' => $qtyValue,
            'keterangan' => "koin",
        ];
    }
    setoran_penjualanlain::insert($insertDatakoin);

    return redirect()->route('penjualanlain')
        ->with('success', 'Data penjualan lain berhasil disimpan');
    }

    public function penjualanlainedit(setoran_penjualanlain $reportsetoranpenjualanlain)
    {   
            return view('forms.form_edit_setoran',[
                "title" => "Saloka Sales Report | Form Edit Setoran",
            ],compact('reportsetoranpenjualanlain'));
    }

    public function penjualanlainupdate(Request $request, setoran_penjualanlain $reportsetoranpenjualanlain)
    {
        request()->validate([
        'jumlah' => 'required',
        ]);
        $reportsetoranpenjualanlain->update($request->all());
        return redirect()->route('penjualanlain')
                        ->with('success');
    }
}