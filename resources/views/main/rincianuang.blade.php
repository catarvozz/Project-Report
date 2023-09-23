@extends('layouts/main')

@section('container')
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3 mt-3">
                <h4>REKAP UANG SETORAN</h4>
                <p>Jumat, 18 Agustus 2023</p>
                  <div class="card">
                    <div class="float-left">
                        <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                    </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover" id="textthead">
                    <thead>
                        <tr>
                            <th>UANG SETORAN</th>
                            <th>KETERANGAN</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>100000</td>
                            <td>Kertas</td>
                            <td>8</td>
                            <td>800000</td>
                        </tr>
                        </tbody>
                        <tr>
                            <th>GRAND TOTAL</th>
                            <th></th>
                            <th>2000000</th>
                            <th>2000000</th>
                        </tr>
                    </table>
              <!-- table end -->
              </div>
            </div>
          <br><br>
          <h4>BRI 303</h4>
              <div class="card">
                <div class="float-left">
                    <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
                </div>
              <div class="card-body table-responsive">
                  <table class="table table-hover" id="textthead">
                  <thead>
                    <tr>
                        <th>UANG SETORAN</th>
                        <th>KETERANGAN</th>
                        <th>JUMLAH</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100000</td>
                        <td>Kertas</td>
                        <td>8</td>
                        <td>800000</td>
                    </tr>
                    </tbody>
                    <tr>
                        <th>GRAND TOTAL</th>
                        <th></th>
                        <th>2000000</th>
                        <th>2000000</th>
                    </tr>
                  </table>
              </div>
              </div>
            <!-- table end -->
          </div>
          <br>
          <h4>MODAL</h4>
          <div class="card">
            <div class="float-left">
                <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
            </div>
            <div class="card-body table-responsive">
            <table class="table table-hover table responsive">
                <thead>
                    <th>NO</th>
                    <th>STORE</th>
                    <th>JUMLAH</th>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Ticketing</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>VW Long</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Food Truck ARARYA KINGDOM FB</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>DAIMAMI</td>
                        <td>500000</td>
                    </tr>
                </tbody>
                    <tr>
                        <th colspan="2">GRAND TOTAL</th>
                        <th>2000000</th>
                    </tr>
            </table>
            </div>
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