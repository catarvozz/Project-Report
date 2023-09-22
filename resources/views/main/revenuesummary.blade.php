@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>REVENUE SUMMARY GLOBAL</h4>
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
                                        <th scope="col">TIPE</th>
                                        <th scope="col">CASH</th>
                                        <th scope="col">DEBIT/TRANSFER</th>
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($summaryglobals as $summaryglobal)
                                    <tr>
                                        <th>{{ $number++ }}</th>
                                        <td>{{ $summaryglobal->tipe }}</td>
                                        <td>{{ $summaryglobal->cash }}</td>
                                        <td >{{ $summaryglobal->debittransfer}}</td>
                                        <td>{{ $summaryglobal->total_sumglobal}}</td>
                                    </tr>
                                @endforeach  
                                    </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                <!-- table end -->
            </div>
        </div>
    </main>
@endsection