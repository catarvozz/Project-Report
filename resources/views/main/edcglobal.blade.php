@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>EDC GLOBAL REPORT</h4>
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
                        <table id="" class="table table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">BANK</th>
                                    <th scope="col">DEBIT</th>
                                    <th scope="col">KREDIT</th>
                                    <th scope="col">QRIS</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportedcs as $reportedc)
                                <tr>
                                    <th>{{ $number++ }}</th>
                                    <td>{{ $reportedc->bank }}</td>
                                    <td>{{ $reportedc->debit }}</td>
                                    <td >{{ $reportedc->kredit}}</td>
                                    <td>{{ $reportedc->qris}}</td>
                                </tr>
                            @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection