@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex">
                    <h4 class="mb-0" id="title">MONITORING PENJUALAN SOUVENIR AND F&B-ALL GLOBAL</h4>
                </div>
                <div class="d-flex flex-row mt-3 mt-md-0">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-2" id="date" name="date" />
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary text-white dropdown-toggle" id="buttondownload" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                            <li><a class= "dropdown-item" href="#">Download as PDF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-between align-items-center">
                <h4 id="title">MONITORING PENJUALAN SOUVENIR AND F&B-ALL GLOBAL</h4>
                <div class="d-flex">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-3" id="date" name="date" />
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary text-white dropdown-toggle" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                            <li><a class="dropdown-item" href="#">Download as PDF</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="container-fluid">
                <div class="card mb-5">
                    <div class="card-body table-responsive">
                        <table class="table table-hover" cellspacing="0" width="100%">
                            <thead id="woodstrip">
                                <tr>
                                    <th>NO</th>
                                    <th>AREA</th>
                                    <th>CASH</th>
                                    <th>EDC</th>
                                    <th>KATEGORI</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportglobals as $reportglobal)
                                <tr>
                                    <td>{{ $number++ }}</td>
                                    <td>{{ $reportglobal->area }}</td>
                                    <td>{{ $reportglobal->cash }}</td>
                                    <td >{{ $reportglobal->edc}}</td>
                                    <td >{{ $reportglobal->kategori}}</td>
                                    <td>{{ $reportglobal->total_allglobal}}</td>
                                </tr>
                                @endforeach 
                                <tr>
                                    <th colspan="5">TOTAL CASH</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="5">TOTAL EDC</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="5">GRAND TOTAL</th>
                                    <th>2000000</th>
                                </tr> 
                            </tbody>  
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                Revenue Summary Global
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <!-- table revenue -->
                                <div class="container-fluid">
                                    <div class="mb-3 mt-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="p-2">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" class="form-control" id="date"/>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary text-white dropdown-toggle" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-download"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                                                        <li><a class="dropdown-item" href="#">Download as PDF</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="card">
                                                <div class="card-body table-responsive">
                                                    <table class="table table-hover" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>TIPE</th>
                                                                <th>CASH</th>
                                                                <th>DEBIT/TRANSFER</th>
                                                                <th>TOTAL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>1</th>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">GRAND TOTAL</th>
                                                                <th>97000000</th>
                                                                <th>5000000</th>
                                                                <th>4000000</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                EDC Global
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <!-- table edc global -->
                                <div class="container-fluid">
                                    <div class="mb-3 mt-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="p-2">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" class="form-control" id="date" />
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary text-white dropdown-toggle" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-download"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                                                        <li><a class="dropdown-item" href="#">Download as PDF</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="card">
                                                <div class="card-body table-responsive">
                                                    <table id="" class="table table-hover" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>BANK</th>
                                                                <th>DEBIT</th>
                                                                <th>KREDIT</th>
                                                                <th>QRIS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>1</th>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td >test</td>
                                                                <td>test</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Komplemen & Voucher
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <!-- table komplemen & voucher -->
                                <div class="container-fluid">
                                    <div class="mb-3 mt-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="p-2">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" class="form-control" id="date" />
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary text-white dropdown-toggle" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-download"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                                                        <li><a class="dropdown-item" href="#">Download as PDF</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="card">
                                                <div class="card-body table-responsive">
                                                    <table id="" class="table table-hover" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>KOMPLEMEN & VOUCHER</th>
                                                                <th>LOKASI</th>
                                                                <th>VOUCHER TL</th>
                                                                <th>KOMPLEMEN</th>
                                                                <th>TOTAL</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>1</th>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                                <td>test</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="6">Total Cash</th>
                                                                <th>2000000</th>
                                                            </tr> 
                                                            <tr>
                                                                <th colspan="6">Total EDC</th>
                                                                <th>2000000</th>
                                                            </tr> 
                                                            <tr>
                                                                <th colspan="6">Grand Total</th>
                                                                <th>2000000</th>
                                                            </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection