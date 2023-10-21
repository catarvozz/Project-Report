@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex">
                    <h4 class="mb-0" id="title">PENJUALAN TICKET REPORT</h4>
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
                <h4 class="mb-0" id="title">PENJUALAN TICKET REPORT</h4>
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
                        <table id="" class="table table-hover" cellspacing="0" width="100%">
                            <thead id="redstrip">
                                <tr>
                                    <th></th>
                                    <th style="text-align: center" colspan="2">SALES</th>
                                    <th style="text-align: center" colspan="2">MARKETING</th>
                                    <th style="text-align: center" colspan="3">KETERANGAN</th>
                                </tr>
                                <tr>
                                    <th>DATE</th>
                                    <th>Group</th>
                                    <th>Group Web</th>
                                    <th>Individu-Terusan</th>
                                    <th>Individu-OTA</th>
                                    <th>Total Berbayar</th>
                                    <th>Total Komplimen</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportsummaryticketings as $reportsummaryticketing)
                                <tr>
                                    <td>{{ $reportsummaryticketing->tanggal }}</td>
                                    <td>{{ $reportsummaryticketing->group }}</td>
                                    <td >{{ $reportsummaryticketing->group_web}}</td>
                                    <td>{{ $reportsummaryticketing->individu_terusan}}</td>
                                    <td>{{ $reportsummaryticketing->individu_ota}}</td>
                                    <td>{{ $reportsummaryticketing->total_bayar}}</td>
                                    <td>{{ $reportsummaryticketing->total_komplimen}}</td>
                                    <td>{{ $reportsummaryticketing->total}}</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <th>Total</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>1000</th>
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