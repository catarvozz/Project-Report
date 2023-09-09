<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penyewaan_scooter;
use App\Models\setoran_penyewaan;
use Carbon\Carbon;

class penyewaanController extends Controller
{
    public function index()
    {
        $currentdate= Carbon::now()->toDateString();
        $reportpenyewaans = penyewaan_scooter::simplePaginate(10);
        $reportsetoranpenyewaans = setoran_penyewaan::whereDate('created_at', $currentdate)->simplePaginate(12);
        return view('main.penyewaan', [
            "title" => "Saloka Sales Report | Penyewaan Scooter & E-Bike",
        ],compact('reportpenyewaans','reportsetoranpenyewaans'));
    }
    public function penyewaaninsert()
    {
        return view('forms.form_insert_setoran_penyewaan', [
            "title" => "Saloka Sales Report | Form Setoran Penyewaan",
        ]);
    }
    public function penyewaanstore(Request $request) {
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
    setoran_penyewaan::insert($insertData);

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
    setoran_penyewaan::insert($insertDatakoin);

    return redirect()->route('penyewaan')
        ->with('success', 'Data penyewaan lain berhasil disimpan');
    }

    public function penyewaanedit(setoran_penyewaan $reportsetoranpenyewaan)
    {   
            return view('forms.form_edit_setoran_penyewaan',[
                "title" => "Saloka Sales Report | Form Edit Setoran",
            ],compact('reportsetoranpenyewaan'));
    }

    public function penyewaanupdate(Request $request, setoran_penyewaan $reportsetoranpenyewaan)
    {
        request()->validate([
        'jumlah' => 'required',
        ]);
        $reportsetoranpenyewaan->update($request->all());
        return redirect()->route('penyewaan')
                        ->with('success');
    }


}
