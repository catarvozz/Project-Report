<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\all_global;
use App\Models\all_irdept;
use App\Models\all_irdeptsum;
use App\Models\all_summary;
use App\Models\total_uang_allsummary;
use App\Models\all_ticketing;
use App\Models\setoran_kasir_tiket;
use App\Models\dashboard;
use App\Models\edc_global;
use App\Models\komplemen_voucher;
use App\Models\logout;
use App\Models\masterItems;
use App\Models\content_masteritems;
use App\Models\masterPecahanuangs;
use App\Models\content_masteruang;
use App\Models\masterUsers;
use App\Models\content_masterusers;
use App\Models\penjualan_lain;
use App\Models\setoran_penjualanlain;
use App\Models\penyewaan_scooter;
use App\Models\setoran_penyewaan;
//untuk penyewaan dan penjualanlain
use Carbon\Carbon;
use App\Models\rincianuang;
use App\Models\souvenir_fnb;
use App\Models\setoran;
use App\Models\summary_global;
use App\Models\summary_ticketing;
use App\Models\userprofile;

class mainController extends Controller
{
    //allglobal
    public function allglobal()
    {
        $reportglobals = all_global::simplePaginate(10);
        $number = $reportglobals->firstItem();
        return view('main.allglobal', [
            "title" => "Saloka Sales Report | All Global Report",

        ],compact('reportglobals','number'));
    }
    //allirdept
    public function allirdept()
    {
        $reportirdepts = all_irdept::simplePaginate(10);
        $number = $reportirdepts->firstItem();
        return view('main.allirdept', [
            "title" => "Saloka Sales Report | All IR Dept Report",
        ],compact('reportirdepts','number'));
    }
    //allirdeptsumm
    public function allirdeptsummary()
    {
        $reportsumirdepts = all_irdeptsum::simplePaginate(10);
        $number = $reportsumirdepts->firstItem();
        return view('main.allirdeptsummary', [
            "title" => "Saloka Sales Report | All IR Dept Summary Report",
        ],compact('reportsumirdepts','number'));
    }
    //allsumm
    public function allsummary()
    {
        $reportsummarys = all_summary::simplePaginate(10);
        $reporttotalsummarys = total_uang_allsummary::simplePaginate(10);
        return view('main.allsummary', [
            "title" => "Saloka Sales Report | All Summary Report",
        ],compact('reportsummarys','reporttotalsummarys'));
    }
    //allticketing
    public function allticketing(Request $request)
    {
        $reportticketings = all_ticketing::simplePaginate(10);
        $setoranticketings = setoran_kasir_tiket::simplePaginate(10);
        $number = $reportticketings->firstItem();
        $number1 = $setoranticketings->firstItem();
        $selectedKasir= "all";

        if ($request->kasir !== "all" && $request->date == null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::where('kasir','=', $request->kasir)->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::where('kasir','=', $request->kasir)->simplePaginate(10);
         
        } else if ($request->date !== null){
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::where('kasir','=', $request->kasir)->whereDate('created_at',$request->date )->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::where('kasir','=', $request->kasir)->whereDate('created_at',$request->date )->simplePaginate(10);
       
        } 
        
        if ($request->kasir === "all" && $request->date === null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::simplePaginate(10);
        }

        if ($request->kasir === "all" && $request->date !== null) {
            $selectedKasir=$request->kasir;
            $reportticketings = all_ticketing::whereDate('created_at',$request->date )->simplePaginate(10);
            $setoranticketings = setoran_kasir_tiket::whereDate('created_at',$request->date )->simplePaginate(10);
        }

        return view('main.allticketing', [
            "title" => "Saloka Sales Report | All Ticketing Report",
        ],compact('reportticketings','setoranticketings','number1','number','selectedKasir'));
    }
    //dashboard
    public function index()
    {
        return view('main.index', [
            "title" => "Saloka Sales Report",
        ]);
    }
    //edcglobal
    public function edcglobal()
    {
        $reportedcs = edc_global::simplePaginate(10);
        $number = $reportedcs->firstItem();
        return view('main.edcglobal', [
            "title" => "Saloka Sales Report | EDC Global Report",
        ],compact('reportedcs','number'));
    }
    //edc
    public function edc()
    {
        return view('main.edc', [
            "title" => "Saloka Sales Report | EDC",
        ]);
    }
    //komplemen
    public function komplemendanvoucher()
    {
        $reportkomplemenvcs = komplemen_voucher::simplePaginate(10);
        $number = $reportkomplemenvcs->firstItem();
        return view('main.komplemendanvoucher', [
            "title" => "Saloka Sales Report | Komplemen & Voucher",
        ],compact('reportkomplemenvcs','number'));
    }

    //logout
    public function login()
    {
        return view('login.login', [
            "title" => "Saloka Sales Report | Login",
        ]);
    }
    //masteritem
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
    //masterpecahanuang
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
    //masteruser
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
    //masterkategori
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
    //penjualanlain
    public function penjualanlain()
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
        return view('forms.form_insert_setoran_penjualanlain', [
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
            return view('forms.form_edit_setoran_penjualanlain',[
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
    //penyewaan
    public function penyewaan()
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
    //rincianuang
    public function rincianuang()
    {
        return view('main.rincianuang', [
            "title" => "Saloka Sales Report | Rincian Uang",
        ]);
    }
    //souvenirfnb
    public function souvenirfnb(Request $request)
    {
        $reportsouvenirfnbs = souvenir_fnb::simplePaginate(10);
        $setoransouvenirfnbs = setoran::simplePaginate(10);
        $number = $reportsouvenirfnbs->firstItem();
        $number1 = $setoransouvenirfnbs->firstItem();
        $selectedStore= "all";
        
        if ($request->store !== "all" && $request->date == null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::where('store','=', $request->store)->simplePaginate(10);
            $setoransouvenirfnbs = setoran::where('store','=', $request->store)->simplePaginate(10);
         
        } else if ($request->date !== null){
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::where('store','=', $request->store)->whereDate('created_at',$request->date )->simplePaginate(10);
            $setoransouvenirfnbs = setoran::where('store','=', $request->store)->whereDate('created_at',$request->date )->simplePaginate(10);
       
        } 
        
        if ($request->store === "all" && $request->date === null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::simplePaginate(10);
            $setoransouvenirfnbs = setoran::simplePaginate(10);
        }

        if ($request->store === "all" && $request->date !== null) {
            $selectedStore=$request->store;
            $reportsouvenirfnbs = souvenir_fnb::whereDate('created_at',$request->date )->simplePaginate(10);
            $setoransouvenirfnbs = setoran::whereDate('created_at',$request->date )->simplePaginate(10);
        }

        return view('main.souvenirfnb', [
            "title" => "Saloka Sales Report | Souvenir & FnB",
        ],compact('reportsouvenirfnbs','number', 'selectedStore','setoransouvenirfnbs'));
    }
    //summary_global
    public function revenuesummary()
    {
        $summaryglobals = summary_global::simplePaginate(10);
        $number = $summaryglobals->firstItem();
        return view('main.revenuesummary', [
            "title" => "Saloka Sales Report | Revenue Summary Global",
        ],compact('summaryglobals','number'));
    }
    //summary ticketing
    public function summaryticketing()
    {
        $reportsummaryticketings = summary_ticketing::simplePaginate(10);
        // $number = $reportsummaryticketings->firstItem();
        return view('main.summaryticketing', [
            "title" => "Saloka Sales Report | Summary Ticketing",
        ],compact('reportsummaryticketings'));
    }
    //userprofile
    public function userprofile()
    {
        return view('main.userprofile', [
            "title" => "Saloka Sales Report | Profile",
        ]);
    }
    //form master users edit
    public function editusers()
    {
        return view('forms.form_edit_master_users', [
            "title" => "Saloka Sales Report | Edit Master User",
        ]);
    }
    //form master pecahan uangs edit
    public function edituangs()
    {
        return view('forms.form_edit_master_uangs', [
            "title" => "Saloka Sales Report | Edit Master Pecahan Uang",
        ]);
    }
    //form master items edit
    public function edititems()
    {
        return view('forms.form_edit_master_items', [
            "title" => "Saloka Sales Report | Edit Master Pecahan Item",
        ]);
    }
    //form master categories edit
    public function editkategori()
    {
        return view('forms.form_edit_master_kategori', [
            "title" => "Saloka Sales Report | Edit Master Kategori",
        ]);
    }
}
