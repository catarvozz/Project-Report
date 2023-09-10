@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <br><h3>Form Master Pecahan Uang</h3>
        <div class="card">
            <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Pecahan Uang</label>
                    <input type="text" class="form-control" id="inputNama">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jenis</label>
                    <select id="inputAccess" class="form-select">
                    <option selected>Pilih...</option>
                    <option>Kertas</option>
                    <option>Logam</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection