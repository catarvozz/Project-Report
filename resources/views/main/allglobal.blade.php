@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>MONITORING PENJUALAN SOUVENIR AND F&B-ALL GLOBAL</h4>
            <div class="d-flex justify-content-end">
                <div class="p-2">
                    <div class="input-group date" id="datepicker">
                    <input type="date" class="form-control" id="date" />
                </div>
                </div>
                <div class="p-2">
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
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="" class="table table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>AREA</th>
                                    <th>CASH</th>
                                    <th>EDC</th>
                                    <th>KATEGORI</th>
                                    <th>TOTAL</th>
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
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection