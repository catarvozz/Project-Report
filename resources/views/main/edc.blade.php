@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex">
                    <h4 class="mb-0" id="title">EDC REPORT</h4>
                </div>
                <div class="d-flex flex-row mt-3 mt-md-0">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-2" id="date" name="date" />
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
                <h4 id="title">EDC REPORT</h4>
                <div class="d-flex">
                    <form action="" id="search-form" class="d-flex">
                        <input type="date" class="form-control mr-3" id="date" name="date" />
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
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="woodstrip">
                          <tr>
                            <th>NO</th>
                            <th>KASIR</th>
                            <th>LOKASI</th>
                            <th>PEMBAYARAN</th>
                            <th>METODE</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>
                              <ul>
                                <li>KREDIT</li>
                                <hr>
                                <li>QRIS</li>
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
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>
                              <ul>
                                <li>DEBIT</li>
                                <hr>
                                <li>QRIS</li>
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
                            <th colspan="5">GRAND TOTAL</th>
                            <th>12000000</th>
                          </tr>
                        </tbody>
                    </table><br>
                    <hr id="hrborder">

                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="woodstrip">
                          <tr>
                            <th>NO</th>
                            <th>PRODUK</th>
                            <th>PEMBAYARAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>TIKET</td>
                            <td>
                              <ul>
                                <li>BCA QQ 6969-Debit</li>
                                <hr>
                                <li>BCA QQ 6969-Kredit</li>
                                <hr>
                                <li>BCA QQ 6969-QRIS</li>
                                <hr>
                                <li>BNI-Debit</li>
                                <hr>
                                <li>BNI-QRIS</li>
                                <hr>
                                <li>Mandiri-Debit</li>
                                <hr>
                                <li>Mandiri-QRIS</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>ADVANCE DEPOSIT</td>
                            <td>
                              <ul>
                                <li>BCA QQ 6969-Debit</li>
                                <hr>
                                <li>BCA QQ 6969-Kredit</li>
                                <hr>
                                <li>BCA QQ 6969-QRIS</li>
                                <hr>
                                <li>BNI-Debit</li>
                                <hr>
                                <li>BNI-QRIS</li>
                                <hr>
                                <li>Mandiri-Debit</li>
                                <hr>
                                <li>Mandiri-QRIS</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                        </tbody>
                    </table><br>
                    <hr id="hrborder">

                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="woodstrip">
                          <tr>
                            <th>NO</th>
                            <th>BANK</th>
                            <th>METODE</th>
                            <th>TOTAL</th>
                            <th>GRAND TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>BCA-PANORAMA 2288</td>
                            <td>
                              <ul>
                                <li>DEBIT</li>
                                <hr>
                                <li>KREDIT</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                          <tr>
                          <td>2</td>
                            <td>BCA-QQ 6969</td>
                            <td>
                              <ul>
                                <li>DEBIT</li>
                                <hr>
                                <li>KREDIT</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                              <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                        </tbody>
                    </table><br>
                    <hr id="hrborder">

                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="woodstrip">
                          <tr>
                            <th>NO</th>
                            <th>GRAND TOTAL</th>
                            <th>JUMLAH</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                              <td>1</td>
                              <td>DEBIT</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>KREDIT</td>
                              <td>100000</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>QRIS-EDC</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>QRIS</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>EDC</td>
                              <td>1000000</td>
                          </tr>
                        </tbody>
                    </table><br>
                    <hr id="hrborder">
                </div>
            </div>

            <!-- <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>PRODUK</th>
                            <th>PEMBAYARAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>TIKET</td>
                            <td>
                              <ul>
                                <li>BCA QQ 6969-Debit</li>
                                <hr>
                                <li>BCA QQ 6969-Kredit</li>
                                <hr>
                                <li>BCA QQ 6969-QRIS</li>
                                <hr>
                                <li>BNI-Debit</li>
                                <hr>
                                <li>BNI-QRIS</li>
                                <hr>
                                <li>Mandiri-Debit</li>
                                <hr>
                                <li>Mandiri-QRIS</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>ADVANCE DEPOSIT</td>
                            <td>
                              <ul>
                                <li>BCA QQ 6969-Debit</li>
                                <hr>
                                <li>BCA QQ 6969-Kredit</li>
                                <hr>
                                <li>BCA QQ 6969-QRIS</li>
                                <hr>
                                <li>BNI-Debit</li>
                                <hr>
                                <li>BNI-QRIS</li>
                                <hr>
                                <li>Mandiri-Debit</li>
                                <hr>
                                <li>Mandiri-QRIS</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <!-- <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>BANK</th>
                            <th>METODE</th>
                            <th>TOTAL</th>
                            <th>GRAND TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>BCA-PANORAMA 2288</td>
                            <td>
                              <ul>
                                <li>DEBIT</li>
                                <hr>
                                <li>KREDIT</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                            <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                          <tr>
                          <td>2</td>
                            <td>BCA-QQ 6969</td>
                            <td>
                              <ul>
                                <li>DEBIT</li>
                                <hr>
                                <li>KREDIT</li>
                                <hr>
                                <li>QRIS</li>
                              </ul>
                            </td>
                            <td>
                              <ul>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                                <hr>
                                <li>200000</li>
                              </ul>
                            </td>
                            <td>200000</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <!-- <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>GRAND TOTAL</th>
                            <th>JUMLAH</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                              <td>1</td>
                              <td>DEBIT</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>KREDIT</td>
                              <td>100000</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>QRIS-EDC</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>QRIS</td>
                              <td>1000000</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>EDC</td>
                              <td>1000000</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <div class="card mb-5">
                <div class="card-body table-responsive">
                    <table class="table table-hover" cellspacing="0" width="100%">
                        <thead id="woodstrip">
                          <tr>
                            <th>NO</th>
                            <th>GROUP</th>
                            <th>TANGGAL</th>
                            <th>TRANSFER</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>1</td>
                            <td>SDN 1 Salatiga</td>
                            <td>6 Oktober 2023</td>
                            <td>BRI 303</td>
                            <td>2000000</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>SMPN 1 Salatiga</td>
                            <td>6 Oktober 2023</td>
                            <td>BRI 306</td>
                            <td>2000000</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>SMAN 1 Salatiga</td>
                            <td>6 Oktober 2023</td>
                            <td>BCA 2288</td>
                            <td>2000000</td>
                          </tr>
                        </tbody> 
                    </table><br>
                    <hr id="hrborder">

                    <table class="table table-hover" cellspacing="0" width="100%">
                        <tr>
                            <td colspan="4">Tiket.com</td>
                            <td>100000</td>
                        </tr>
                        <tr>
                            <td colspan="4">Shopee</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td colspan="4">QRIS</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td colspan="4">Saloka Web</td>
                            <td>1000000</td>
                        </tr>
                    </table><br>
                    <hr id="hrborder">

                    <table class="table table-hover" cellspacing="0" width="100%">
                        <tr>
                            <td colspan="4">TOTAL TRANSFER</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td colspan="4">TOTAL EDC</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td colspan="4">MDR Estimation</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td colspan="4">Fund received on Bank Account</td>
                            <td>1000000</td>
                        </tr>
                    </table><br>
                    <hr id="hrborder">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection