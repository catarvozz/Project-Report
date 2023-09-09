@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
            <h2>Dashboard</h2>
            <p>Jumat, 18 Agustus 2023</p>
             <!-- content -->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <!-- <h5 class="card-header">Ticket</h5> -->
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Ticket</p>
                            <p class="card-text text-success">18.2% increase than yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <!-- <h5 class="card-header">Souvenir & FnB</h5> -->
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Souvenir & FnB</p>
                            <p class="card-text text-success">4.6% increase than yesterday</p>
                        </div>
                     </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <!-- <h5 class="card-header">Penyewaan</h5> -->
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Penyewaan</p>
                            <p class="card-text text-danger">2.6% decrease than yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                    <!-- <h5 class="card-header">Penjualan Lain</h5> -->
                        <div class="card-body">
                            <h5 class="card-title">Rp35.000.000</h5>
                            <p class="card-text">Penjualan Lain</p>
                            <p class="card-text text-success">2.5% increase than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                    <div class="card">
                    <!-- <h5 class="card-header">Traffic Ticket</h5> -->
                        <div class="card-body">
                            <h5>Traffic Ticket</h5>
                            <canvas id="myChart" style="height: 300px; width: 100%;"></canvas>
                        </div>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
                            <script src="../../../../js/chart.js"></script>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card">
                    <!-- <h5 class="card-header">Latest Transaction</h5> -->
                        <div class="card-body table-responsive">
                            <h5>Latest Transaction</h5>
                            <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">AREA</th>
                                        <th scope="col">CASH</th>
                                        <th scope="col">EDC</th>
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                        <td>Apa</td>
                                    </tr>
                                </tbody>  
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection