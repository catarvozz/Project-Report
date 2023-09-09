@extends('layouts/main')

@section('container')
            <div class="container-fluid">
            <h3>Form Edit Setoran</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{route('penjualanlainupdate',$reportsetoranpenjualanlain)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nilai Uang {{ $reportsetoranpenjualanlain->nilai_uang }}</label>
                                        <input type="text" name="jumlah" value="{{ $reportsetoranpenjualanlain->jumlah }}" class="form-control">
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