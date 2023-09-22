@extends('layouts/main')

@section('container')
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3 mt-3">
                <h4>REKAP UANG SETORAN</h4>
                <p>Jumat, 18 Agustus 2023</p>
                  <div class="card">
                  <div class="card-body table-responsive">
                    <table class="table table-hover" id="textthead">
                    <thead>
                        <tr>
                            <th scope="col">UANG SETORAN</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">JUMLAH</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>100000</td>
                            <td>Kertas</td>
                            <td>8</td>
                            <td>800000</td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <th></th>
                            <th>2000000</th>
                            <th>2000000</th>
                        </tr>
                        </tbody>
                    </table>
              <!-- table end -->
              </div>
            </div>
          <br><br>
          <h4>BRI 303</h4>
              <div class="card">
              <div class="card-body table-responsive">
                  <table class="table table-hover" id="textthead">
                  <thead>
                    <tr>
                        <th scope="col">UANG SETORAN</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">JUMLAH</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100000</td>
                        <td>Kertas</td>
                        <td>8</td>
                        <td>800000</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <th></th>
                        <th>2000000</th>
                        <th>2000000</th>
                    </tr>
                    </tbody>
                  </table>
              </div>
              </div>
            <!-- table end -->
          </div>
          <br>
          <h4>MODAL</h4>
          <div class="card">
            <div class="card-body table-responsive">
            <table class="table table-hover table responsive">
                <thead>
                    <th>NO</th>
                    <th>STORE</th>
                    <th>JUMLAH</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ticketing</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>VW Long</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Food Truck ARARYA KINGDOM FB</td>
                        <td>500000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>DAIMAMI</td>
                        <td>500000</td>
                    </tr>
                </tbody>
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