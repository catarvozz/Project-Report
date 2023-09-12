@extends('layouts/main')

@section('container')
      <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="mb-3 mt-3">
            <h4>SETORAN REPORT</h4>
              <p>Jumat, 18 Agustus 2023</p>
              <p>Nama Kasir: Evydian Rosa Putri</p>
              <!-- table start -->
              <div class="container-fluid">
                <div class="card">
                <div class="card-body table-responsive">
                  <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">UANG SETORAN</th>
                          <th scope="col">KETERANGAN</th>
                          <th scope="col">JUMLAH</th>
                          <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($reportsetorans as $reportsetoran)
                        <tr>
                          <td>{{ $reportsetoran->kasir_pc }}</td>
                          <td>{{ $reportsetoran->jumlah_uang }}</td>
                        </tr>
                      @endforeach 
                      </tbody>
                      <tr>
                        <th colspan="3">Total</th>
                        <th>2000000</th>
                      </tr> 
                      </table>
                    </div>
                </div>
              </div>
              <!-- table end -->
            </div>
        </div>
      </main>
@endsection
