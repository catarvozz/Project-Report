@extends('layouts/main')

@section('container')
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>MENU</h4>
                        <p>Jumat, 18 Agustus 2023</p>
                        <p>Nama Kasir: Evydian Rosa Putri</p>
                        <!-- table start -->
                        <div class="container-fluid">
                          <div class="card">
                          <div class="card-body table-responsive">
                            <table class="table table-striped">
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
                              @foreach ($reportmenus as $reportmenu)
                                <tr>
                                  <td>{{ $reportmenu->product_code }}</td>
                                  <td>{{ $reportmenu->product_name }}</td>
                                  <td >{{ $reportmenu->cost_rp}}</td>
                                  <td>{{ $reportmenu->price_rp}}</td>
                                  <td>{{ $reportmenu->quantity}}</td>
                                  <td>{{ $reportmenu->subtotal_rp}}</td>
                                </tr>
                              @endforeach 
                              </tbody>
                          </div>
                          </div>
                        </div>
                        <!-- table end -->
                    </div>
                </div>
            </main>
@endsection