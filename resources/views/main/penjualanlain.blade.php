@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>LAPORAN PENJUALAN LAIN</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <!-- table start -->
                    <!-- card start -->
                    <!-- <div class="row my-3">
                          <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rp35.000.000</h5>
                                    <p class="card-text">Total Cash</p>
                                </div>
                              </div>
                          </div>
                          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                           <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rp35.000.000</h5>
                                    <p class="card-text">Total EDC</p>
                                </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rp35.000.000</h5>
                                    <p class="card-text">Grand Total</p>
                                </div>
                            </div>
                          </div>
                        </div> -->
                <!-- card end -->
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th scope="col">NO</th>
                                      <th scope="col">ITEM</th>
                                      <th scope="col">HARGA SATUAN</th>
                                      <th scope="col">TOTAL PENJUALAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($reportpenjualanlains as $reportpenjualanlain)
                                    <tr>
                                      <th>{{ $number++ }}</th>
                                      <td>{{ $reportpenjualanlain->item }}</td>
                                      <td>{{ $reportpenjualanlain->harga_satuan }}</td>
                                      <td >{{ $reportpenjualanlain->total_penjualan}}</td>
                                    </tr>
                                  @endforeach 
                                  </tbody>
                                    <tr>
                                      <th colspan="3">Total Cash</th>
                                      <th>2000000</th>
                                    </tr> 
                                    <tr>
                                      <th colspan="3">Total EDC</th>
                                      <th>2000000</th>
                                    </tr> 
                                    <tr>
                                      <th colspan="3">Grand Total</th>
                                      <th>2000000</th>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <!-- table end -->
                      <br>
                      <h6>SETORAN PENJUALAN LAIN</h6>
                      <p>Kasir: Hafiz
                      <div class="card">
                        <div class="card-body table-responsive">
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">Uang Setoran</th>
                                  <th scope="col">Jumlah</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportsetoranpenjualanlains as $reportsetoranpenjualanlain)
                                <tr>
                                  <td>{{ $reportsetoranpenjualanlain->nilai_uang }}</td>
                                  <td>{{ $reportsetoranpenjualanlain->jumlah }}</td>
                                  <td>{{ $reportsetoranpenjualanlain->keterangan }}</td>
                                  <td><a href="{{ route('penjualanlainedit',$reportsetoranpenjualanlain->id) }}" class="">Edit</a></td>
                            @endforeach
                                <tr>
                                  <th colspan="3">Total</th>
                                  <th>2000000</th>
                                </tr> 
                              </tbody>
                          </table>
                        </div>
                      </div>
                    <!-- table end -->
                </div>
                  <div>
                    <a href="{{ route('forminsert') }}" class="">Buat Setoran</a>
                  </div>
            </div>
        </div>
    </main>
@endsection