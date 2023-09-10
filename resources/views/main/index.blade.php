@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div>
            <h1>Dashboard</h1>
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
                            <h5>Top 10 Sales</h5>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>Prima 600 ml</p>
                                    <span class="badge bg-primary rounded-pill">100</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>Ice Cream</p>
                                    <span class="badge bg-primary rounded-pill">50</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>Ayam Geprek</p>
                                    <span class="badge bg-primary rounded-pill">25</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>Ayam Geprek</p>
                                    <span class="badge bg-primary rounded-pill">12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>Ayam Geprek</p>
                                    <span class="badge bg-primary rounded-pill">9</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection