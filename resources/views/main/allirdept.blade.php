@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>MONITORING PENJUALAN SOUVENIR AND F&B - IR DEPT</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                    <div class="float-left">
                          <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                        </div>
                        <div class="float-right">
                            <div class="input-group">
                                <input type="search" class="form-control ml-3 rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                                <button type="button" class="btn btn-outline-success">Search</button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                        <table id="" class="table table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>AREA</th>
                                    <th>CASH</th>
                                    <th>EDC</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>test</th>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
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
                </div>
            <!-- table end -->
            </div>
        </div>
    </main>
@endsection