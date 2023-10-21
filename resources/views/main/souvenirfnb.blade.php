@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex">
                    <h4 class="mb-0" id="title">SOUVENIR & FNB REPORT</h4>
                </div>
                <div class="d-flex flex-row mt-3 mt-md-0">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-2" id="date" name="date" />
                        <select name="store" class="form-select mr-2" id="select-form">
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
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary text-white dropdown-toggle" id="buttondownload" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                            <li><a class= "dropdown-item" href="#">Download as PDF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0" id="title">SOUVENIR & FNB REPORT</h4>
                <div class="d-flex">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-3" id="date" name="date" />
                        <select name="store" class="form-select mr-3" id="select-form">
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
                    </form>
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
            </div> -->

            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table id="" class="table table-hover" cellspacing="0" width="100%">
                        <thead id="bluestrip">
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

            <h4 id="title">SETORAN</h4>
            <div class="d-flex">
                <label class="col">Kasir:</label>
                <input type="text" class="form-control" id="kasir" value="Hafiz">
            </div>
            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead id="bluestrip">
                            <tr>
                            <th>NO</th>
                            <th>UANG SETORAN</th>
                            <th>KETERANGAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                            <th colspan="2">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="">
                            @foreach ($setoransouvenirfnbs as $setoransouvenirfnb)
                                <tr>
                                    <td>{{$number++}}</td>
                                    <td>{{$setoransouvenirfnb-> uang_setoran}}</td>
                                    <td>{{$setoransouvenirfnb-> keterangan}}</td>
                                    <td><input type="text" class="form-control" value="{{$setoransouvenirfnb-> jumlah}}"></td>
                                    <td>{{$setoransouvenirfnb-> total}}</td>
                                    <td><a class="btn btn-warning text-white btn-sm" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                                    <td><a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
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

            <h4 id="title">ACTIVITY LOG</h4>
            <div class="card mt-3 mb-5">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Sebs Vettel <small class="text-danger">8 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Lewis Hamilton <small class="text-danger">7 Oktober 2023</small></h6>
                                    <small>Edit jumlah uang 100000 menjadi 4 pada 16.00</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="../../../../img/lokasip.webp" alt="" style="border-radius:"50%"; width="40px"; height="40px" class="mr-2">
                                <div>
                                    <h6>Kimi Raikkonen <small class="text-danger">6 Oktober 2023</small></h6>
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