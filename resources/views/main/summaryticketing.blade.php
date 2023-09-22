@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>PENJUALAN TIKET REPORT</h4>
                <p>Jumat, 18 Agustus 2023</p>
                    <!-- table start -->
                    <div class="container-fluid">
                        <div class="card">
                            <div class="float-left">
                                <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            </div>
                        <div class="float-right">
                            <div class="input-group">
                                <button type="button" class="btn btn-success mr-3 rounded">Add item</button>
                                <input type="search" class="form-control ml-3 rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                                <button type="button" class="btn btn-outline-success">Search</button>
                            </div>
                        </div>
                            <div class="card-body table-responsive">
                                <table id="" class="table table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: center" scope="col" colspan="2">SALES</th>
                                            <th style="text-align: center" scope="col" colspan="2">MARKETING</th>
                                            <th style="text-align: center" scope="col" colspan="3">KETERANGAN</th>
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