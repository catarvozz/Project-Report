@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <br><h3>Form Master Item</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID Item</label>
                                <input type="text" class="form-control" id="iditem" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Item Menu</label>
                                <input type="text" class="form-control" id="itemmenu" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select id="kategori" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Konsinyasi</option>
                                    <option>In House F</option>
                                    <option>In House R</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Store Category</label>
                                <select id="subkategori" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Snack SLK</option>
                                    <option>Ice Cream Indo</option>
                                    <option>Merchandise Boneka</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>MFG</label>
                                <input type="text" class="form-control" id="hppcogs" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Section</label>
                                <input type="text" class="form-control" id="section" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="text" class="form-control" id="hargajual" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>HPP COGS</label>
                                <input type="text" class="form-control" id="hppcogs" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>HPP Konsi</label>
                                <input type="text" class="form-control" id="hppcogs" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>HPP Bagi Hasil</label>
                                <input type="text" class="form-control" id="hppcogs" placeholder="">
                            </div>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-success float-right text-white"  href="{{ route('masteritems') }}">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection