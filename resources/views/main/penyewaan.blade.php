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
                <div class="row">
                <!-- input nama kasir -->
                <label class="col-sm-1">Kasir:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="staticEmail" value="Hafiz">
                </div>
                <div class="card">
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Uang Setoran</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <form action="">
                        <tr>
                            <td>100000</td>
                            <td><input type="text" class="form-control col-3" id="100000"></td>
                            <td>Kertas</td>
                            <td><a href="#" class="btn btn-warning text-white"><i class="fa-solid fa-trash-can"></i></a></td>
                          <tr>
                          <tr>
                            <td>75000</td>
                            <td><input type="text" class="form-control col-3" id="100000"></td>
                            <td>Kertas</td>
                            <td><a href="#" class="btn btn-warning text-white"><i class="fa-solid fa-trash-can"></i></a></td>
                          <tr>
                          <tr>
                            <td>50000</td>
                            <td><input type="text" class="form-control col-3" id="100000"></td>
                            <td>Kertas</td>
                            <td><a href="#" class="btn btn-warning text-white"><i class="fa-solid fa-trash-can"></i></a></td>
                          <tr>
                          <tr>
                            <th colspan="3">Total</th>
                            <th>2000000</th>
                          </tr> 
                        </form>
                      </tbody>
                      </table>
                  </div>
                </div>
              <!-- table end -->
              </div>
                <div>
                  <a href="{{ route('forminsertpenyewaan') }}" class="btn btn-success mt-3 mr-3 float-right">Buat Setoran</a>
                </div>
            </div>
        </div>
    </main>
@endsection