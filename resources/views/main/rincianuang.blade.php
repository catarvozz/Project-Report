@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>REKAP UANG SETORAN</h4>
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
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>UANG SETORAN</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100000</td>
                                <td>Kertas</td>
                                <td>8</td>
                                <td>800000</td>
                            </tr>
                            <tr>
                                <th>GRAND TOTAL</th>
                                <th></th>
                                <th>2000000</th>
                                <th>2000000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <h4>BRI 303</h4>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>UANG SETORAN</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100000</td>
                                <td>Kertas</td>
                                <td>8</td>
                                <td>800000</td>
                            </tr>
                            <tr>
                                <th>GRAND TOTAL</th>
                                <th></th>
                                <th>2000000</th>
                                <th>2000000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <h4>MODAL</h4>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover table responsive">
                        <thead>
                            <th>NO</th>
                            <th>STORE</th>
                            <th>JUMLAH</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Ticketing</td>
                                <td>500000</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>VW Long</td>
                                <td>500000</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Food Truck ARARYA KINGDOM FB</td>
                                <td>500000</td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>DAIMAMI</td>
                                <td>500000</td>
                            </tr>
                            <tr>
                                <th colspan="2">GRAND TOTAL</th>
                                <th>2000000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
        const form = document.getElementById('search-form');
        const dropdown = document.getElementById('select-form');
        dropdown.addEventListener('change', function() {
            form.submit();
        });
        </script>
    </div>
</main>
@endsection