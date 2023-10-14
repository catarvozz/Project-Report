@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>PENYEWAAN REPORT</h4>
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
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ITEM</th>
                                <th>HARGA SATUAN</th>
                                <th>JUMLAH PENYEWAAN</th>
                                <th>TOTAL PENYEWAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Scooter</td>
                                <td>50000</td>
                                <td>2</td>
                                <td>100000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>E-BIKE</td>
                                <td>50000</td>
                                <td>2</td>
                                <td>100000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><input type="text" class="form-control col-3"></td>
                                <td><button type="button" class="btn btn-primary">Submit</button></td>
                            </tr>
                        </tbody>
                            <tr>
                                <th colspan="4">TOTAL CASH</th>
                                <th>2000000</th>
                            </tr> 
                            <tr>
                                <th colspan="4">TOTAL EDC</th>
                                <th>2000000</th>
                            </tr> 
                            <tr>
                                <th colspan="4">GRAND TOTAL</th>
                                <th>2000000</th>
                            </tr>
                    </table>
                </div>
            </div>

            <h4>SETORAN PENYEWAAN</h4>
            <div class="row">
                <label class="col-sm-1">Kasir:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="staticEmail" value="Hafiz">
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
                        <thead>
                            <tr>
                                <th>UANG SETORAN</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>TOTAL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form>
                                <tr>
                                    <td>100000</td>
                                    <td>Kertas</td>
                                    <td>2</td>
                                    <td>200000</td>
                                    <td>
                                        <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                        <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>75000</td>
                                    <td>Kertas</td>
                                    <td>2</td>
                                    <td>150000</td>
                                    <td>
                                        <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                        <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td> 
                                </tr>
                                <tr>
                                    <td>50000</td>
                                    <td>Kertas</td>
                                    <td><input type="text" class="form-control col-3" value="4"></td>
                                    <td>200000</td>
                                    <td>
                                        <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                        <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">GRAND TOTAL</th>
                                    <th>20000</th>
                                    <th></th>
                                </tr> 
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>

            <h4>ACTIVITY LOG</h4>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Carlos Sainz <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Max Verstappen <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Lando Norris <small class="text-danger">6 Oktober 2023</small></h6>
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