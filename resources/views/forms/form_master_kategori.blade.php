@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <br><h3>Form Master Kategori</h3>
        <div class="card">
            <div class="card-body">
            <form class="row g-2">
                    <label class="form-label">ID Kategori</label>
                    <input type="text" class="form-control" id="inputID">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="inputKeterangan">
                <div class="col-12">
                    <a class="btn btn-success float-right text-white mt-3" href="{{ route('masterkategori') }}">Submit</a>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection