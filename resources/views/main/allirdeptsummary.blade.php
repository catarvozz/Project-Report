@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <div class="container-fluid" style="padding-bottom: 10px;">
                    <h4>REVENUE SUMMARY IR DEPT</h4>
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
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                    <div class="float-left">
                    <a href="../views/index.html" class="btn btn-danger">Number of visitors: 1016</a>
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