@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>ALL TICKETING REPORT</h4>
            <div class="d-flex justify-content-end">
                <div class="p-2">
                    <form action="" id="search-form">
                        <div class="form-group d-flex">
                            <input type="date" class="form-control mr-3" id="date" name="date" />
                            <select name="kasir" class="form-select" id="select-form">
                                <option value="all" {{ $selectedKasir == "all" ? 'selected' : '' }}>Choose...</option>
                                <option value="reza" {{ $selectedKasir == "reza" ? 'selected' : '' }}>Kasir-Reza</option>
                                <option value="desi" {{ $selectedKasir == "desi" ? 'selected' : '' }}>Kasir-Desi</option>
                                <option value="banu" {{ $selectedKasir == "banu" ? 'selected' : '' }}>Kasir-Banu</option>
                            </select>
                            <noscript><button type="submit"></button></noscript>
                        </div>
                    </form>
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
                    <table class="table table-hover" cellspacing="0" width="100%" id="data-table">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>PRODUK</th>
                            <th>HARGA SATUAN</th>
                            <th>TOTAL TIKET</th>
                            <th>SALDO AWAL</th>
                            <th>METODE PEMBAYARAN</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($reportticketings as $reportticketing)
                          <tr>
                            <td>{{$number++}}</td>
                            <td>{{$reportticketing-> produk}}</td>
                            <td>{{$reportticketing-> harga_satuan}}</td>
                            <td>{{$reportticketing-> total_tiket}}</td>
                            <td>{{$reportticketing-> saldo_awal}}</td>
                            <td>
                              <ul>
                                <li>CASH</li>
                                <hr>
                                <li>TRANSFER</li>
                              </ul>
                            </td>
                            <td>
                              <ul>
                                <li>2000000</li>
                                <hr>
                                <li>2000000</li>
                              </ul>
                            </td>
                          </tr>
                          @endforeach
                          <tr>
                            <th colspan="3">GRAND TOTAL</th>
                            <th>150</th>
                            <th></th>
                            <th></th>
                            <th>12000000</th>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h4>SETORAN TICKET</h4>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>KASIR</th>
                            <th>UANG SETORAN</th>
                            <th>KETERANGAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($setoranticketings as $setoranticketing)
                          <tr>
                            <td>{{$number1++}}</td>
                            <td>{{$setoranticketing-> kasir}}</td>
                            <td>{{$setoranticketing-> nilai_uang}}</td>
                            <td>{{$setoranticketing-> keterangan}}</td>
                            <td>{{$setoranticketing-> jumlah_uang}}</td>
                            <td>{{$setoranticketing-> total_uang}}</td>
                            <td>
                              <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                              <a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          <tr>
                            <th colspan="6">GRAND TOTAL</th>
                            <th>2000000</th>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h4>ACTIVITY LOG</h4>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Carlos Sainz <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Mengedit setoran jumlah uang 100000 menjadi 4</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Max Verstappen <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Mengedit setoran jumlah uang 50000 menjadi 7</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-circle-user mr-3" style="color: #169870; font-size: 35px" id="iconlog"></i>
                                <div>
                                    <h6>Lando Norris <small class="text-danger">6 Oktober 2023</small></h6>
                                    <small>Mengedit setoran jumlah uang 10000 menjadi 3</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
              const selectForm = document.getElementById('search-form');
              const selectDropdown = document.getElementById('select-form');
              const dateDropdown = document.getElementById('date');
              selectDropdown.addEventListener('change', function() {
                selectForm.submit();
              });
              dateDropdown.addEventListener('change', function() {
                selectForm.submit();
              });
            </script>
            <script>
                function getUrlParameter(date) {
                    const urlParams = new URLSearchParams(window.location.search);
                    return urlParams.get(date);
                }
                const dateParam = getUrlParameter('date');
                if (dateParam) {
                    document.getElementById('date').value = dateParam;
                }
            </script>
        </div>
    </div>
</main>
@endsection