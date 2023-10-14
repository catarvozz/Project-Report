@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h4>SOUVENIR AND F&B REPORT</h4>
            <div class="d-flex justify-content-end">
            <div class="p-2">
                    <form action="" id="search-form">
                        <div class="form-group d-flex">
                            <input type="date" class="form-control mr-3" id="date" name="date" />
                            <select name="store" class="form-select" id="select-form">
                                <option value="all" {{ $selectedStore == "all" ? 'selected' : '' }}>Choose...</option>
                                <option value="VW Long FnB" {{ $selectedStore == "VW Long FnB" ? 'selected' : '' }}>VW Long FnB</option>
                                <option value="Foodrsuck Ararya Kingdom" {{ $selectedStore == "Foodrsuck Ararya Kingdom" ? 'selected' : '' }}>Foodrsuck Ararya Kingdom</option>
                                <option value="Daimami" {{ $selectedStore == "Daimami" ? 'selected' : '' }}>Daimami</option>
                                <option value="Red Truck" {{ $selectedStore == "Red Truck" ? 'selected' : '' }}>Red Truck</option>
                                <option value="Kedai Adu Tangkas FnB" {{ $selectedStore == "Kedai Adu Tangkas FnB" ? 'selected' : '' }}>Kedai Adu Tangkas FnB</option>
                                <option value="Rimba Cafe" {{ $selectedStore == "Rimba Cafe" ? 'selected' : '' }}>Rimba Cafe</option>
                                <option value="Jenju Cafe" {{ $selectedStore == "Jenju Cafe" ? 'selected' : '' }}>Jenju Cafe</option>
                                <option value="Shop3" {{ $selectedStore == "Shop3" ? 'selected' : '' }}>Shop3</option>
                                <option value="Shop4" {{ $selectedStore == "Shop4" ? 'selected' : '' }}>Shop4</option>
                                <option value="Shop7" {{ $selectedStore == "Shop7" ? 'selected' : '' }}>Shop7</option>
                                <option value="Chiclin" {{ $selectedStore == "Chiclin" ? 'selected' : '' }}>Chiclin</option>
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
                    <table id="" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ITEM</th>
                                <th>KATEGORI</th>
                                <th>HARGA SATUAN</th>
                                <th>JUMLAH PENJUALAN</th>
                                <th>METODE PEMBAYARAN</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportsouvenirfnbs as $reportsouvenirfnb)
                            <tr>
                                <td>{{$number++}}</td>
                                <td>{{$reportsouvenirfnb-> item}}</td>
                                <td>{{$reportsouvenirfnb-> kategori}}</td>
                                <td>{{$reportsouvenirfnb-> harga_satuan}}</td>
                                <td>{{$reportsouvenirfnb-> jumlah_penjualan}}</td>
                                <td>{{$reportsouvenirfnb-> metode_pembayaran}}</td>
                                <td>{{$reportsouvenirfnb-> total}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th colspan="6">TOTAL CASH</th>
                                <th>2000000</th>
                            <tr>
                                <th colspan="6">TOTAL EDC</th>
                                <th>2000000</th>
                            </tr> 
                            <tr>
                                <th colspan="6">GRAND TOTAL</th>
                                <th>2000000</th>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

            <h4>SETORAN</h4>
            <div class="row">
                <label class="col-sm-1">Kasir:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="staticEmail" value="Hafiz">
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>NO</th>
                            <th>UANG SETORAN</th>
                            <th>KETERANGAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                            <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="">
                            @foreach ($setoransouvenirfnbs as $setoransouvenirfnb)
                                <tr>
                                    <td>{{$number++}}</td>
                                    <td>{{$setoransouvenirfnb-> uang_setoran}}</td>
                                    <td>{{$setoransouvenirfnb-> keterangan}}</td>
                                    <td><input type="text" class="form-control col-3" value="{{$setoransouvenirfnb-> jumlah}}"></td>
                                    <td>{{$setoransouvenirfnb-> total}}</td>
                                    <td>
                                        <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                        <a href="#" class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                <tr>
                                @endforeach
                                <tr>
                                    <th colspan="4">GRAND TOTAL</th>
                                    <th>2000000</th>
                                    <th></th>
                                </tr> 
                            </form>
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
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
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
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
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
                                    <small>Submit setoran pada 16.00</small>
                                </div>
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
</main>
@endsection