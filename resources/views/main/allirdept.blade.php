@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>MONITORING PENJUALAN SOUVENIR AND F&B - IR DEPT</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body table-responsive">
                        <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">AREA</th>
                                    <th scope="col">CASH</th>
                                    <th scope="col">EDC</th>
                                    <th scope="col">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportirdepts as $reportirdept)
                                <tr>
                                    <th>{{ $number++ }}</th>
                                    <td>{{ $reportirdept->area }}</td>
                                    <td>{{ $reportirdept->cash }}</td>
                                    <td >{{ $reportirdept->edc}}</td>
                                    <td>{{ $reportirdept->total}}</td>
                                </tr>
                            @endforeach 
                            </tbody>
                            <tr>
                                <th colspan="4">Total Cash</th>
                                <th>2000000</th>
                            </tr> 
                            <tr>
                                <th colspan="4">Total EDC</th>
                                <th>2000000</th>
                            </tr> 
                            <tr>
                                <th colspan="4">Grand Total</th>
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