@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <br><h3>Form Master Items</h3>
            <div class="card">
                <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <labelc class="form-label">Nama Item</label>
                        <input type="text" class="form-control" id="inputNama">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" id="inputHarga">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis</label>
                        <select id="" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Retail</option>
                        <option>FnB</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Store</label>
                        <select id="" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Rimba</option>
                        <option>Daimami</option>
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