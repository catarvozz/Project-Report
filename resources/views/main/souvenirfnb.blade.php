@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <div class="container-fluid">
                    <h4>SOUVENIR AND F&B REPORT</h4>
                    <p>Jumat, 18 Agustus 2023</p><br>
                        <div class="form mb-3" id="shadowform">
                            <form id="search-form">
                                <select name="store" class="form-select" id="select-form">
                                    <option value="all" {{ $selectedStore == "all" ? 'selected' : '' }}>Penjualan Semua Store</option>
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
                                        <button type="button" class="btn btn-success mr-3 rounded">Add item</button>
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
                                                <th scope="col">STORE</th>
                                                <th scope="col">MENU</th>
                                                <th scope="col">SETORAN</th>
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
                                                <td>{{ $reportsouvenirfnb->store }}</td>
                                                <td><a href="{{ $reportsouvenirfnb->menu }}" class="btn btn-link">Menu</a></td>
                                                <td><a href="{{ $reportsouvenirfnb->setoran }}" class="btn btn-link">Setoran</a></td>
                                            </tr>
                                        @endforeach 
                                        </tbody>
                                            <tr>
                                                <th colspan="8">Total Cash</th>
                                                <th>2000000</th>
                                            <tr>
                                                <th colspan="8">Total EDC</th>
                                                <th>2000000</th>
                                            </tr> 
                                            <tr>
                                                <th colspan="8">Grand Total</th>
                                                <th>2000000</th>
                                            </tr> 
                                    </table>
                                </div>
                            </div>
                            <!-- table end -->
                            <br>
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