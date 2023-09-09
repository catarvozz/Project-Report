@extends('layouts/main')

@section('container')
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3 mt-3">
                        <h4>LAPORAN ALL TICKETING</h4>
                        <p>Jumat, 18 Agustus 2023</p>
                        <!-- table start -->
                        <div class="container-fluid">
                            <div class="card-body" width="70px" height="70px" color="white">
                        <div class="container-fluid">
                          <div class="form mb-3">
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
                              <!-- udah keluar scrollable -->
                              <div class="card-body table-responsive">
                              <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
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
                              <br>
                              <h6>TOTAL PENDAPATAN KATEGORI</h6>
                              <div class="card">
                                <div class="card-body table-responsive">
                                    <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>KATEGORI</th>
                                                    <th>TOTAL PENDAPATAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($reporttotaltipembayarans as $reporttotaltipembayaran)
                                                <tr>
                                                <th>{{ $number_total++ }}</th>
                                                <td>{{ $reporttotaltipembayaran->tipe_pembayaran }}</td>
                                                <td>{{ $reporttotaltipembayaran->total_pendapatan }}</td>
                                                </tr>
                                            @endforeach 
                                            </tbody> 
                                    </table>
                                </div>
                              </div>
                              <!-- table start -->
                              <br>
                              <h6>SETORAN KASIR</h6>
                                <div class="card">
                                <div class="card-body table-responsive">
                                  <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">UANG SETORAN</th>
                                          <th scope="col" colspan="5">JUMLAH</th>
                                        </tr>
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Rosa</th>
                                          <th scope="col">Desi</th>
                                          <th scope="col">Putri</th>
                                          <th scope="col">Ramadhani</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                      @foreach ($reportsetorankasirtikets as $reportsetorankasirtiket)
                                        <tr>
                                          <td>{{ $reportsetorankasirtiket->nilai_uang }}</td>
                                          <td>{{ $reportsetorankasirtiket->kasir_pc1 }}</td>
                                          <td>{{ $reportsetorankasirtiket->kasir_pc2 }}</td>
                                          <td>{{ $reportsetorankasirtiket->kasir_pc3 }}</td>
                                          <td>{{ $reportsetorankasirtiket->kasir_pc4 }}</td>
                                        </tr>
                                        @endforeach 
                                        <tr>
                                          <td colspan="4">Total</td>
                                          <td>2000000</td>
                                        </tr>
                                        </tbody>
                                      </table>
                                  </div>
                                </div>
                              <!-- table end -->
                              </div>
                          </div>
                <script>
                const form = document.getElementById('search-form');
                const dropdown = document.getElementById('select-form');
                dropdown.addEventListener('change', function() {
                    form.submit();
                });
                </script>
            </main>
@endsection