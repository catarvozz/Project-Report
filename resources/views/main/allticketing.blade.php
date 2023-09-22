@extends('layouts/main')

@section('container')
      <main class="content px-3 py-2">
          <div class="container-fluid">
              <div class="mb-3 mt-3">
                  <h4>ALL TICKETING REPORT</h4>
                  <p>Jumat, 18 Agustus 2023</p>
                      <div class="form mb-3" id="shadowform">
                        <form id="search-form">
                        <select name="kasir" class="form-select" id="select-form">
                            <option value="all" {{ $selectedKasir == "all" ? 'selected' : '' }}>Semua Kasir</option>
                            <option value="reza" {{ $selectedKasir == "reza" ? 'selected' : '' }}>Kasir-Reza</option>
                            <option value="desi" {{ $selectedKasir == "desi" ? 'selected' : '' }}>Kasir-Desi</option>
                            <option value="banu" {{ $selectedKasir == "banu" ? 'selected' : '' }}>Kasir-Banu</option>
                        </select>
                        <noscript><button type="submit"></button></noscript>
                        </form>
                      </div>
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
                        <table class="table table-hover" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                <th>NO</th>
                                <th>PENGUNJUNG</th>
                                <th>HARGA SATUAN</th>
                                <th>TOTAL TIKET</th>
                                <th>SALDO AWAL</th>
                                <th>TOTAL BAYAR</th>
                                <th>TIPE PEMBAYARAN</th>
                                <th>KASIR</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($reportticketings as $reportticketing)
                              <tr>
                                <th>{{ $number++ }}</th>
                                <td>{{ $reportticketing->pengunjung }}</td>
                                <td>{{ $reportticketing->harga_satuan }}</td>
                                <td >{{ $reportticketing->total_tiket}}</td>
                                <td>{{ $reportticketing->saldo_awal}}</td>
                                <td>{{ $reportticketing->total_bayar}}</td>
                                <td>{{ $reportticketing->tipe_pembayaran}}</td>
                                <td>{{ $reportticketing->kasir}}</td>
                              </tr>
                            @endforeach 
                            </tbody>
                            </table>
                          </div>
                        </div>
                        <br><br>
                        <h4>TOTAL PENDAPATAN KATEGORI</h4>
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
                          <table class="table table-hover table responsive">
                              <thead>
                                  <th>NO</th>
                                  <th>KATEGORI</th>
                                  <th>TOTAL PENDAPATAN</th>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>test</td>
                                      <td>test</td>
                                      <td>test</td>
                                  </tr>
                              </tbody>
                          </table>
                          </div>
                          </div>
                        <!-- table start -->
                        <br><br>
                        <h4>SETORAN TICKET</h4>
                          <div class="card">
                          <div class="float-left">
                            <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                          </div>
                            <div class="card-body table-responsive">
                              <table class="table table-hover" id="textthead">
                                <thead>
                                    <tr id="textcenter">
                                      <th style="text-align: center" scope="col">SETORAN UANG</th>
                                      <th style="text-align: center" scope="col" colspan="5">JUMLAH</th>
                                    </tr>
                                    <tr>
                                      <th scope="col"></th>
                                      <th scope="col"><input type="text" class="form-control col-6" id="pc1" placeholder="kasir1"></th>
                                      <th scope="col"><input type="text" class="form-control col-6" id="pc1" placeholder="kasir2"></th>
                                      <th scope="col"><input type="text" class="form-control col-6" id="pc1" placeholder="kasir3"></th>
                                      <th scope="col"><input type="text" class="form-control col-6" id="pc1" placeholder="kasir4"></th>
                                      <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>100000</td>
                                      <td><input type="text" class="form-control col-3" id="pc1"></td>
                                      <td><input type="text" class="form-control col-3" id="pc2"></td>
                                      <td><input type="text" class="form-control col-3" id="pc3"></td>
                                      <td><input type="text" class="form-control col-3" id="pc4"></td>
                                      <td><input type="text" class="form-control col-3" id="total"></td>
                                    </tr>
                                    <tr>
                                      <th>Grand Total</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <button class="btn btn-success float-right mr-3">Submit</button>
                          </div>
                        <!-- table end -->
                  </div>
                <script>
                const form = document.getElementById('search-form');
                const dropdown = document.getElementById('select-form');
                dropdown.addEventListener('change', function() {
                    form.submit();
                });
              </script>
            </div>
          </div>
      </main>
@endsection