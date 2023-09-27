@extends('layouts/main')

@section('container')
      <main class="content px-3 py-2">
          <div class="container-fluid">
              <div class="mb-3 mt-3">
                  <h4>ALL TICKETING REPORT</h4>
                  <div class="d-flex justify-content-end">
                    <div class="p-2">
                        <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="date" />
                        </div>
                    </div>
                    <div class="p-2">
                        <form id="search-form">
                            <select name="kasir" class="form-select" id="select-form">
                                <option value="all" {{ $selectedKasir == "all" ? 'selected' : '' }}>Choose...</option>
                                <option value="reza" {{ $selectedKasir == "reza" ? 'selected' : '' }}>Kasir-Reza</option>
                                <option value="desi" {{ $selectedKasir == "desi" ? 'selected' : '' }}>Kasir-Desi</option>
                                <option value="banu" {{ $selectedKasir == "banu" ? 'selected' : '' }}>Kasir-Banu</option>
                            </select>
                            <noscript><button type="submit"></button></noscript>
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
                                <th>METODE PEMBAYARAN</th>
                                <th>TOTAL</th>
                              </tr>
                            </thead>
                            <tbody> 
                            <tr>
                                <td>1</td>
                                <td>SDN Salatiga 01</td>
                                <td>80000</td>
                                <td>50</td>
                                <td>0</td>
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
                              <tr>
                              <td>2</td>
                                <td>SMPN Salatiga 01</td>
                                <td>80000</td>
                                <td>100</td>
                                <td>0</td>
                                <td>
                                  <ul>
                                    <li>CASH</li>
                                    <hr>
                                    <li>SHOPEE</li>
                                  </ul>
                                </td>
                                <td>
                                <ul>
                                  <li>4000000</li>
                                  <hr>
                                  <li>4000000</li>
                                  </ul>
                                </td>
                              </tr>
                            </tbody>
                              <tr>
                                <th colspan="3">GRAND TOTAL</th>
                                <th>150</th>
                                <th></th>
                                <th></th>
                                <th>12000000</th>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <h4>SETORAN TICKET</h4>
                          <div class="card mb-5">
                            <div class="card-body table-responsive">
                              <table class="table table-hover" id="textthead">
                                <thead>
                                    <tr id="textcenter">
                                      <th style="text-align: center">SETORAN UANG</th>
                                      <th style="text-align: center">KETERANGAN</th>
                                      <th style="text-align: center" colspan="4">JUMLAH</th>
                                      <th></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>Kasir1</th>
                                      <th>Kasir2</th>
                                      <th>Kasir3</th>
                                      <th>Kasir4</th>
                                      <th>TOTAL</th>
                                      <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>100000</td>
                                      <td>Kertas</td>
                                      <td><input type="text" class="form-control col-3" id="pc1"></td>
                                      <td><input type="text" class="form-control col-3" id="pc2"></td>
                                      <td><input type="text" class="form-control col-3" id="pc3"></td>
                                      <td><input type="text" class="form-control col-3" id="pc4"></td>
                                      <td>100000</td>
                                      <td>
                                        <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                        <a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th colspan="2">GRAND TOTAL</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th>2000000</th>
                                      <th></th>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <button class="btn btn-success float-right mr-3" id="sucess">Submit</button>
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