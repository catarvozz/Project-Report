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
                        <div class="card-body table-responsive">
                        <table class="table table-striped" cellspacing="0" width="100%">
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
                        <h6>TOTAL PENDAPATAN KATEGORI</h6>
                        <div class="card">
                          <div class="card-body table-responsive">
                              <table class="table table-striped" cellspacing="0" width="100%">
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
                        <br><br>
                        <h6>SETORAN KASIR</h6>
                          <div class="card">
                            <div class="card-body table-responsive">
                              <table class="table table-striped" id="textthead">
                                <thead>
                                    <tr id="textcenter">
                                      <th style="text-align: center" scope="col">UANG SETORAN</th>
                                      <th style="text-align: center" scope="col" colspan="5">JUMLAH</th>
                                    </tr>
                                    <tr>
                                      <th scope="col"></th>
                                      <th scope="col">Rosa</th>
                                      <th scope="col">Desi</th>
                                      <th scope="col">Putri</th>
                                      <th scope="col">Ramadhani</th>
                                      <th scope="col">Total</th>
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
                                      <td>{{ $reportsetorankasirtiket->total_uang }}</td>
                                    </tr>
                                    @endforeach 
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