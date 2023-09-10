@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>ALL SUMMARY</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body table-responsive">
                        <table id="tableresponsive" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr class="floating-text">
                                    <th>DATE</th>
                                    <th>TICKETING</th>
                                    <th>RESTORAN(FnB)</th>
                                    <th>RETAIL</th>
                                    <th>MERCHANDISE</th>
                                    <th>PERSEWAAN SCOOTER</th>
                                    <th>KONSINYASI & BAGI HASIL SALOKA</th>
                                    <th>ENTERTAIN, VENUE, & SOUND</th>
                                    <th>MEMBERSHIP</th>
                                    <th>PEND.LAIN-LAIN</th>
                                    <th>TOTAL PENDAPATAN</th>
                                    <th>CONSIGNMENT IN PAYABLE(Vendor Retail)</th>
                                    <th>CONSIGNMENT IN PAYABLE(Vendor Merchandise)</th>
                                    <th>ADVANCE DEPOSIT</th>
                                    <th>TOTAL SALES REPORT SALOKA</th>
                                    <th>REFUND</th>
                                    <th>KOMPLEMEN FNB</th>
                                    <th>KOMPLEMEN FA</th>
                                    <th>KOMPLEMEN HR</th>
                                    <th>KOMPLEMEN OPS</th>
                                    <th>KOMPLEMEN IR</th>
                                    <th>KOMPLEMEN MARKETING</th>
                                    <th>KOMPLEMEN SALES</th>
                                    <th>VOUCHER TL</th>
                                    <th>BRI PANORAMA</th>
                                    <th>BCA PANORAMA</th>
                                    <th>BCA QQ</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($reportsummarys as $reportsummary)
                                <tr>
                                    <td>{{ $reportsummary->tanggal }}</td>
                                    <td>{{ $reportsummary->ticketing }}</td>
                                    <td>{{ $reportsummary->restoran_fnb }}</td>
                                    <td>{{ $reportsummary->retail }}</td>
                                    <td>{{ $reportsummary->merchandise }}</td>
                                    <td>{{ $reportsummary->persewaan_scooter }}</td>
                                    <td>{{ $reportsummary->konsinyasi_bagihasil }}</td>
                                    <td>{{ $reportsummary->entertain_venue_sound }}</td>
                                    <td>{{ $reportsummary->membership }}</td>
                                    <td>{{ $reportsummary->pend_lain }}</td>
                                    <td>{{ $reportsummary->total_pendapatan }}</td>
                                    <td>{{ $reportsummary->vendor_retail }}</td>
                                    <td>{{ $reportsummary->vendor_merchandise }}</td>
                                    <td>{{ $reportsummary->advance_deposit }}</td>
                                    <td>{{ $reportsummary->total_salesreportsaloka }}</td>
                                    <td>{{ $reportsummary->refund }}</td>
                                    <td>{{ $reportsummary->komplemen_fnb }}</td>
                                    <td>{{ $reportsummary->komplemen_fa }}</td>
                                    <td>{{ $reportsummary->komplemen_hr }}</td>
                                    <td>{{ $reportsummary->komplemen_ops }}</td>
                                    <td>{{ $reportsummary->komplemen_ir }}</td>
                                    <td>{{ $reportsummary->komplemen_marketing }}</td>
                                    <td>{{ $reportsummary->komplemen_sales }}</td>
                                    <td>{{ $reportsummary->voucher_tl }}</td>
                                    <td>{{ $reportsummary->bri_panorama }}</td>
                                    <td>{{ $reportsummary->bca_panorama }}</td>
                                    <td>{{ $reportsummary->bca_qq }}</td>
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
                        <table class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>KATEGORI</th>
                                    <th>TOTAL PENDAPATAN</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reporttotalsummarys as $reporttotalsummary)
                                <tr>
                                    <td>{{ $reporttotalsummary->kategori }}</td>
                                    <td>{{ $reporttotalsummary->total_uang }}</td>
                                </tr>
                            @endforeach 
                            </tbody> 
                        </table>
                        </div>
                    </div>
                </div>
            <!-- table end -->
            </div>
        </div>
    </main>
@endsection