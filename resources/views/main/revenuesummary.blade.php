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
                        <div class="card-body table-responsive">
                            <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">TIPE</th>
                                        <th scope="col">Cash</th>
                                        <th scope="col">Debit/Transfer</th>
                                        <th scope="col">Total</th>
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