@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <div class="container-fluid">
                    <h4>SOUVENIR AND F&B REPORT</h4>
                    <p>Jumat, 18 Agustus 2023</p>
                        <div class="form mb-3 mt-2" id="shadowform">
                            <form id="search-form">
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
                            </form>
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
                                                <th scope="col">ITEM</th>
                                                <th scope="col">KATEGORI</th>
                                                <th scope="col">HARGA SATUAN</th>
                                                <th scope="col">JUMLAH PENJUALAN</th>
                                                <th scope="col">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($reportsouvenirfnbs as $reportsouvenirfnb)
                                            <tr>
                                                <th>{{ $number++ }}</th>
                                                <td>{{ $reportsouvenirfnb->item }}</td>
                                                <td>{{ $reportsouvenirfnb->kategori }}</td>
                                                <td >{{ $reportsouvenirfnb->harga_satuan}}</td>
                                                <td>{{ $reportsouvenirfnb->jumlah_penjualan}}</td>
                                                <td>{{ $reportsouvenirfnb->total }}</td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <th colspan="5">TOTAL CASH</th>
                                                <th>2000000</th>
                                            <tr>
                                                <th colspan="5">TOTAL EDC</th>
                                                <th>2000000</th>
                                            </tr> 
                                            <tr>
                                                <th colspan="5">GRAND TOTAL</th>
                                                <th>2000000</th>
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table end -->
                            <br><br>
                            <h4>MENU</h4>
                                <div class="card">
                                <div class="float-left">
                                    <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                                    </div>
                                    <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col">PRODUCT CODE</th>
                                            <th scope="col">PRODUCT NAME</th>
                                            <th scope="col">COST(Rp)</th>
                                            <th scope="col">PRICE(Rp)</th>
                                            <th scope="col">QUANTITY</th>
                                            <th scope="col">SUBTOTAL(Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="">
                                            <tr>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                            <tr>
                                            </form>
                                            <tr>
                                                <th colspan="5">GRAND TOTAL</th>
                                                <th>2000000</th>
                                            <tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <h4>SETORAN</h4>
                            <div class="row">
                                <label class="col-sm-1">Kasir:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="staticEmail" value="Hafiz">
                                </div>
                                </div>
                                <div class="card">
                                <div class="float-left">
                                    <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                                    </div>
                                    <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>UANG SETORAN</th>
                                            <th>KETERANGAN</th>
                                            <th>JUMLAH</th>
                                            <th>TOTAL</th>
                                            <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="">
                                            <tr>
                                                <td>100000</td>
                                                <td>Kertas</td>
                                                <td><input type="text" class="form-control col-3" id="100000"></td>
                                                <td><input type="text" class="form-control col-4" id="total"></td>
                                                <td>
                                                    <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                                    <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            <tr>
                                            <tr>
                                                <td>75000</td>
                                                <td>Kertas</td>
                                                <td><input type="text" class="form-control col-3" id="100000"></td>
                                                <td><input type="text" class="form-control col-4" id="total"></td>
                                                <td>
                                                    <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                                    <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            <tr>
                                            <tr>
                                                <td>50000</td>
                                                <td>Kertas</td>
                                                <td><input type="text" class="form-control col-3" id="100000"></td>
                                                <td><input type="text" class="form-control col-4" id="total"></td>
                                                <td>
                                                    <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                                    <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            <tr>
                                            <tr>
                                                <th colspan="2">GRAND TOTAL</th>
                                                <th>200</th>
                                                <th>2000000</th>
                                                <th></th>
                                            </tr> 
                                            </form>
                                        </tbody>
                                    </table>
                                    <div>
                                        <a href="{{ route('forminsert') }}" class="btn btn-success mt-3 mr-3 float-right">Submit</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
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