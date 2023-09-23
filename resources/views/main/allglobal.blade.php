@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>MONITORING PENJUALAN SOUVENIR AND F&B-ALL GLOBAL</h4>
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
                                    <th colspan="5">TOTAL CASH</th>
                                    <th>2000000</th>
                                    </tr> 
                                <tr>
                                    <th colspan="5">TOTAL EDC</th>
                                    <th>2000000</th>
                                </tr> 
                                <tr>
                                    <th colspan="5">GRAND TOTAL</th>
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