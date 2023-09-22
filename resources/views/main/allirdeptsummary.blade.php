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
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <th>test</th>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                
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