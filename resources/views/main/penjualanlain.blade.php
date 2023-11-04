@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex">
                    <h4 class="mb-0" id="title">PENJUALAN LAIN REPORT</h4>
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
                <h4 class="mb-0" id="title">PENJUALAN LAIN REPORT</h4>
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

            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="bluestrip">
                            <tr>
                                <th>NO</th>
                                <th>ITEM</th>
                                <th>HARGA SATUAN</th>
                                <th>JUMLAH PENJUALAN</th>
                                <th>METODE PEMBAYARAN</th>
                                <th>TOTAL PENJUALAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Daging Sapi</td>
                                <td>60000</td>
                                <td>3</td>
                                <td>BCA</td>
                                <td>180000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><button type="button" class="btn btn-warning text-white" id="smallsubmit">Submit</button></td>
                            </tr>
                        </tbody>
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
                    </table>
                </div>
            </div>

            <h4 id="title">SETORAN PENJUALAN LAIN</h4>
            <div class="row">
                <label class="col-auto">Kasir:</label>
                <div class="col-3">
                    <input type="text" class="form-control" id="kasir" value="Hafiz">
                </div>
            </div>
            <!-- <div class="d-flex justify-content-end">
                <div class="p-2 col-2">
                    <form id="search-form">
                        <select name="store" class="form-select" id="select-form">
                            <option value="allkasir">All kasir</option>
                            <option value="kasir1">kasir1</option>
                            <option value="kasir2">kasir2</option>
                        </select>
                        <noscript><button type="submit"></button></noscript>
                    </form>
                </div>
            </div> -->
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead id="bluestrip">
                        <tr>
                            <th>UANG SETORAN</th>
                            <th>KETERANGAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            <form>
                                <tr>
                                    <td>100000</td>
                                    <td>Kertas</td>
                                    <td>2</td>
                                    <td>200000</td>
                                    <td><a class="btn btn-warning text-white btn-sm" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                                    <td><a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                                <tr>
                                <tr>
                                    <td>75000</td>
                                    <td>Kertas</td>
                                    <td>2</td>
                                    <td>150000</td>
                                    <td><a class="btn btn-warning text-white btn-sm" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                                    <td><a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                                <tr>
                                <tr>
                                    <td>50000</td>
                                    <td>Kertas</td>
                                    <td><input type="text" class="form-control col-2" value="3"></td>
                                    <td>150000</td>
                                    <td><a class="btn btn-warning text-white btn-sm" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                                    <td><a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                                <tr>
                                <tr>
                                    <th colspan="3">GRAND TOTAL</th>
                                    <th colspan="3">20000</th>
                                </tr> 
                            </form>
                        </tbody>
                    </table>
                    <!-- <div class="text-right">
                        <button type="button" class="btn btn-primary text-white smallsubmit" id="success">Submit</button>
                    </div> -->
                </div>
            </div>

            <h4 id="title">ACTIVITY LOG</h4>
            <div class="card mt-3 mb-5">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Sebs Vettel <small class="text-danger">8 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Lewis Hamilton <small class="text-danger">7 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Kimi Raikkonen <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Submit setoran pada 16.00</small>
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