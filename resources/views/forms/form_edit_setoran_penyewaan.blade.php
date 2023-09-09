@extends('layouts/main')

@section('container')
            <div class="container-fluid">
            <h3>Form Edit Jumlah Setoran | Penyewaan</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{route('penyewaanupdate',$reportsetoranpenyewaan)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nilai Uang {{ $reportsetoranpenyewaan->nilai_uang }}</label>
                                        <input type="text" name="jumlah" value="{{ $reportsetoranpenyewaan->jumlah }}" class="form-control">
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