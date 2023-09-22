@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>KOMPLEMEN & VOUCHER</h4>
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
                                    <th scope="col">NO</th>
                                        <th scope="col">KOMPLEMEN & VOUCHER</th>
                                        <th scope="col">LOKASI</th>
                                        <th scope="col">VOUCHER TL</th>
                                        <th scope="col">KOMPLEMEN</th>
                                        <th scope="col">TOTAL</th>
                                        <th scope="col">KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($reportkomplemenvcs as $reportkomplemenvc)
                                    <tr>
                                        <th>{{ $number++ }}</th>
                                        <td>{{ $reportkomplemenvc->komplemen_voucher }}</td>
                                        <td>{{ $reportkomplemenvc->lokasi }}</td>
                                        <td >{{$reportkomplemenvc->vouchertl}}</td>
                                        <td >{{$reportkomplemenvc->komplemen  }}</td>
                                        <td>{{ $reportkomplemenvc->total}}</td>
                                        <td>{{ $reportkomplemenvc->keterangan}}</td>
                                    </tr>
                                @endforeach 
                                </tbody>
                                    <tr>
                                        <th colspan="6">Total Cash</th>
                                        <th>2000000</th>
                                    </tr> 
                                    <tr>
                                        <th colspan="6">Total EDC</th>
                                        <th>2000000</th>
                                    </tr> 
                                    <tr>
                                        <th colspan="6">Grand Total</th>
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