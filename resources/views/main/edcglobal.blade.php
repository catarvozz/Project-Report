@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>EDC GLOBAL REPORT</h4>
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
                <!-- table end -->
            </div>
        </div>
    </main>
@endsection