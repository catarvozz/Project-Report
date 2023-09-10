@extends('layouts/main')

@section('container')
            <div class="container-fluid">
            <h3>Form Add Setoran | Penjualan Lain</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{route('penjualanlainstore')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Uang 100000</label>
                                        <input type="text" name="qty_100000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 75000</label>
                                        <input type="text" name="qty_75000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 50000</label>
                                        <input type="text" name="qty_50000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 20000</label>
                                        <input type="text" name="qty_20000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 10000</label>
                                        <input type="text" name="qty_10000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 5000</label>
                                        <input type="text" name="qty_5000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 2000</label>
                                        <input type="text" name="qty_2000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 1000</label>
                                        <input type="text" name="qty_1000" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 1000</label>
                                        <input type="text" name="qty_1000_koin" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 500</label>
                                        <input type="text" name="qty_500" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 200</label>
                                        <input type="text" name="qty_200" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div class="form-group">
                                        <label>Uang 100</label>
                                        <input type="text" name="qty_100" class="form-control" placeholder="Masukkan jumlah uang">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection