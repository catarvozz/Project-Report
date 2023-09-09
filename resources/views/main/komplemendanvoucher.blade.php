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
                        <div class="card-body table-responsive">
                            <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                        <th scope="col">Komplemen & Voucher</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Voucher TL</th>
                                        <th scope="col">Komplemen</th>
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