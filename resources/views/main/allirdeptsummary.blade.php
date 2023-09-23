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
                    <div class="float-left">
                          <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TIPE</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <th>1</th>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                
                                </tbody>
                                    <tr>
                                        <th colspan="2">TOTAL</th>
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