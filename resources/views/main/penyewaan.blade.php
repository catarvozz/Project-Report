@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
      <div class="container-fluid">
        <div class="mb-3 mt-3">
          <h4>PENYEWAAN REPORT</h4>
          <p>Jumat, 18 Agustus 2023</p>
              <!-- table start -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table id="tbHorizontal" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th scope="col">ITEM</th>
                                      <th scope="col">HARGA SATUAN</th>
                                      <th scope="col">TOTAL PENYEWAAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($reportpenyewaans as $reportpenyewaan)
                                    <tr>
                                        <td>{{ $reportpenyewaan->item }}</td>
                                        <td>{{ $reportpenyewaan->harga_satuan }}</td>
                                        <td>{{ $reportpenyewaan->total_penyewaan}}</td>
                                    </tr>
                                  @endforeach 
                                    <tr>
                                      <th colspan="2">Total Cash</th>
                                      <th>2000000</th>
                                    </tr> 
                                    <tr>
                                      <th colspan="2">Total EDC</th>
                                      <th>2000000</th>
                                    </tr> 
                                    <tr>
                                      <th colspan="2">Grand Total</th>
                                      <th>2000000</th>
                                    </tr> 
                                  </tbody>
                            </table>
                        </div>
                    </div>
                <!-- table end -->
                <br><br>
                <h6>SETORAN PENYEWAAN</h6>
                <p>Kasir: Hafiz</p>
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
                    @foreach ($reportsetoranpenyewaans as $reportsetoranpenyewaan)
                        <tr>
                          <td>{{ $reportsetoranpenyewaan->nilai_uang }}</td>
                          <td>{{ $reportsetoranpenyewaan->jumlah }}</td>
                          <td>{{ $reportsetoranpenyewaan->keterangan }}</td>
                          <td><a href="{{ route('penyewaanedit',$reportsetoranpenyewaan->id) }}" class="btn btn-danger">Edit</a></td>
                    @endforeach
                        <tr>
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
                  <a href="{{ route('forminsertpenyewaan') }}" class="btn btn-primary mt-3">Buat Setoran</a>
                </div>
            </div>
        </div>
    </main>
@endsection