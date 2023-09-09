@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>MONITORING PENJUALAN SOUVENIR & FOOD AND BEVERAGE-ALL GLOBAL</h4>
                <p>Jumat, 18 Agustus 2023</p>
                    <!-- card start -->
        <!-- <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Total Cash</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Total EDC</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Grand Total</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- card end -->
            <!-- table start -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">AREA</th>
                                    <th scope="col">CASH</th>
                                    <th scope="col">EDC</th>
                                    <th scope="col">KATEGORI</th>
                                    <th scope="col">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportglobals as $reportglobal)
                                <tr>
                                    <th>{{ $number++ }}</th>
                                    <td>{{ $reportglobal->area }}</td>
                                    <td>{{ $reportglobal->cash }}</td>
                                    <td >{{ $reportglobal->edc}}</td>
                                    <td >{{ $reportglobal->kategori}}</td>
                                    <td>{{ $reportglobal->total_allglobal}}</td>
                                </tr>
                            @endforeach 
                            </tbody> 
                                <tr>
                                    <th colspan="5">Total Cash</th>
                                    <th>2000000</th>
                                    </tr> 
                                <tr>
                                    <th colspan="5">Total EDC</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="5">Grand Total</th>
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