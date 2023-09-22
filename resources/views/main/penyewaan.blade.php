@extends('layouts/main')

@section('container')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <h4>PENYEWAAN REPORT</h4>
                <p>Jumat, 18 Agustus 2023</p>
                <div class="container-fluid">
                    <div class="card">
                    <div class="float-left">
                          <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                      </div>
                      <div class="float-right">
                          <div class="input-group">
                              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                              <button type="button" class="btn btn-outline-success mr-3 rounded">Search</button>
                              <button type="button" class="btn btn-success mr-3 rounded"><i class="fa-solid fa-plus"></i></button>  
                          </div>
                      </div>
                        <div class="card-body table-responsive">
                            <table id="" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th scope="col">NO</th>
                                      <th scope="col">ITEM</th>
                                      <th scope="col">HARGA SATUAN</th>
                                      <th scope="col">TOTAL PENYEWAAN</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                      <th>1</th>
                                      <td>Scooter</td>
                                      <td>50000</td>
                                      <td>100000</td>
                                    </tr>
                                    <tr>
                                      <th>2</th>
                                      <td>E-BIKE</td>
                                      <td>50000</td>
                                      <td>100000</td>
                                    </tr>

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

                    <br><br>
                      <h4>SETORAN PENYEWAAN</h4>
                      <div class="row">
                      <label class="col-sm-1">Kasir:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="staticEmail" value="Hafiz">
                      </div>
                    </div>
                      <div class="card">
                      <div class="float-left">
                          <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                        </div>
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
                                    <td>
                                      <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                      <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                  <tr>
                                  <tr>
                                    <td>75000</td>
                                    <td><input type="text" class="form-control col-3" id="100000"></td>
                                    <td>Kertas</td>
                                    <td>
                                      <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                      <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                  <tr>
                                  <tr>
                                    <td>50000</td>
                                    <td><input type="text" class="form-control col-3" id="100000"></td>
                                    <td>Kertas</td>
                                    <td>
                                      <a class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></a>
                                      <a href="#" class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                  <tr>
                                  <tr>
                                    <th colspan="3">Total</th>
                                    <th>2000000</th>
                                  </tr> 
                                </form>
                              </tbody>
                          </table>
                          <div>
                            <a href="{{ route('forminsert') }}" class="btn btn-success mt-3 mr-3 float-right">Submit</a>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </main>
@endsection
<!-- 


    <main class="content px-3 py-2">
      <div class="container-fluid">
        <div class="mb-3 mt-3">
          <h4>PENYEWAAN REPORT</h4>
          <p>Jumat, 18 Agustus 2023</p>

                <div class="container-fluid">
                    <div class="card">
                    <div class="float-left">
                                <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            </div>
                        <div class="float-right">
                            <div class="input-group">
                                <button type="button" class="btn btn-success mr-3 rounded">Add item</button>
                                <input type="search" class="form-control ml-3 rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                                <button type="button" class="btn btn-outline-success">Search</button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="" class="table table-hover" cellspacing="0" width="100%">
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
           
                <br><br>
                <h6>SETORAN PENYEWAAN</h6>
                <div class="row">
         
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
                  </div>
                <div>
                  <a href="{{ route('forminsertpenyewaan') }}" class="btn btn-success mt-3 mr-3 float-right">Buat Setoran</a>
                </div>
            </div>
        </div>
    </main>
 -->