@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0" id="title">Dashboard</h1>
            <div class="d-flex">
                <form action="" id="search-form" class="d-flex">
                    <input type="date" class="form-control mr-3" id="date" name="date" value=
                    "<?php
                    $oneDayAgo = date('Y-m-d', strtotime('-1 day'));
                    echo $oneDayAgo;
                    ?>"/>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rp35.000.000</h5>
                        <p class="card-text">Ticket</p>
                        <small class="text-success"><i class="fa-solid fa-arrow-up"></i> 18.2% than yesterday</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rp35.000.000</h5>
                        <p class="card-text">Souvenir & FnB</p>
                        <small class="text-success"><i class="fa-solid fa-arrow-up"></i> 5% than yesterday</small>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rp35.000.000</h5>
                        <p class="card-text">Penyewaan</p>
                        <small class="text-danger"><i class="fa-solid fa-arrow-down"></i> 2.6% than yesterday</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rp35.000.000</h5>
                        <p class="card-text">Penjualan Lain</p>
                        <small class="text-success"><i class="fa-solid fa-arrow-up"></i> 2% than yesterday</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-body">
                        <h5>Traffic Ticket</h5>
                        <canvas id="lineChart" style="height: 300px; width: 100%;"></canvas>
                    </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
                        <script src="../../../../js/chart.js"></script>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h5>Top 5 Sales</h5>
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
                                <p>Ayam Kremes</p>
                                <span class="badge bg-primary rounded-pill">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p>Ayam Balado</p>
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