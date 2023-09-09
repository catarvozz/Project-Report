@extends('layouts/main')

@section('container')
            <div class="container-fluid">
            <h3>Form Create Nilai Uang Baru</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{route('penyewaanstore')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Denda Kerusakan</label>
                                        <input type="text" name="dendarusak" class="form-control" placeholder="Masukkan harga">
                                    </div>
                                    <div class="form-group">
                                        <label>Charge Kunci Hilang</label>
                                        <input type="text" name="dendakuncihilang" class="form-control" placeholder="Masukkan harga">
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