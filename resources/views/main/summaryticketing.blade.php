@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>LAPORAN PENJUALAN TIKET</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <!-- card start -->
                <!-- <div class="row my-4">
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">186</p>
                                <p class="card-text" id="textket">GROUP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">0</p>
                                <p class="card-text" id="textket">GROUP WEB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">372</p>
                                <p class="card-text" id="textket">INDIVIDU</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">558</p>
                                <p class="card-text" id="textket">TOTAL BERBAYAR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">24</p>
                                <p class="card-text" id="textket">TOTAL KOMPLIMEN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <P class="card-title">582</p>
                                <p class="card-text" id="textket">TOTAL</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- </div><br> -->
                    <!-- card end -->
                    <!-- table start -->
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                    <thead id="textthead">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="2">SALES</th>
                                            <th scope="col" colspan="2">MARKETING</th>
                                            <th scope="col" colspan="3">KETERANGAN</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">DATE</th>
                                            <th scope="col">Group</th>
                                            <th scope="col">Group Web</th>
                                            <th scope="col">Individu-Terusan</th>
                                            <th scope="col">Individu-OTA</th>
                                            <th scope="col">Total Berbayar</th>
                                            <th scope="col">Total Komplimen</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="textthead">
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
                                      </tbody>
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
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- table end -->
            </div>
        </div>
    </main>
@endsection