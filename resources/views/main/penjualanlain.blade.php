@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>PENJUALAN LAIN REPORT</h4>
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
                <div class="card mb-5">
                    <div class="card-body table-responsive">
                        <table class="table table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ITEM</th>
                                    <th>HARGA SATUAN</th>
                                    <th>TOTAL PENJUALAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td><input type="text" class="form-control col-3"></td>
                                    <td><input type="text" class="form-control col-3"></td>
                                    <td><button type="button" class="btn btn-primary">Submit</button></td>
                                </tr>
                            </tbody>
                                <tr>
                                    <th colspan="3">TOTAL CASH</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="3">TOTAL EDC</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="3">GRAND TOTAL</th>
                                    <th>2000000</th>
                                </tr>
                        </table>
                    </div>
                </div>

                <h4>SETORAN PENJUALAN LAIN</h4>
                <div class="row">
                    <label class="col-sm-1">Kasir:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama" value="Hafiz">
                    </div>
                </div>
                <div class="card">
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
                                        <td><input type="text" class="form-control col-3" id="100000"></td>
                                        <td>200000</td>
                                        <td>
                                            <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                            <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>75000</td>
                                        <td>Kertas</td>
                                        <td><input type="text" class="form-control col-3" id="100000"></td>
                                        <td>200000</td>
                                        <td>
                                            <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                            <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    <tr>
                                    <tr>
                                        <td>50000</td>
                                        <td>Kertas</td>
                                        <td><input type="text" class="form-control col-3" id="100000"></td>
                                        <td>200000</td>
                                        <td>
                                            <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                            <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    <tr>
                                    <tr>
                                        <th colspan="2">GRAND TOTAL</th>
                                        <th>200</th>
                                        <th>2000000</th>
                                        <th></th>
                                    </tr> 
                                </form>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-success mt-3 mr-3 float-right text-white" id="sucess">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection