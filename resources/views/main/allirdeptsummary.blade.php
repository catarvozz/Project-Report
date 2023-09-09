@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <div class="container-fluid" style="padding-bottom: 10px;">
                    <h4>REVENUE SUMMARY IR DEPT</h4>
                    <p>Jumat, 18 Agustus 2023</p>
                    <a href="../views/index.html" class="btn btn-danger">Number of visitors: 1016</a>
                </div>
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">TIPE</th>
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($reportsumirdepts as $reportsumirdept)
                                    <tr>
                                        <th>{{ $number++ }}</th>
                                        <td>{{ $reportsumirdept->tipe }}</td>
                                        <td>{{ $reportsumirdept->total }}</td>
                                    </tr>
                                @endforeach 
                                </tbody>
                                    <tr>
                                        <th colspan="2">Total Cash</th>
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