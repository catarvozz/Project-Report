@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <br><h3>Form Master Item</h3>
            <div class="card">
                <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <!-- Kolom kiri dengan 5 input -->
                        <div class="form-group">
                            <label for="iditem">ID Item</label>
                            <input type="text" class="form-control" id="iditem" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="itemmenu">Item Menu</label>
                            <input type="text" class="form-control" id="itemmenu" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="subkategori">Sub Kategori</label>
                            <input type="text" class="form-control" id="subkategori" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="mfg">MFG</label>
                            <input type="text" class="form-control" id="mfg" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <!-- Kolom kanan dengan 5 input -->
                        <div class="form-group">
                            <label for="section">Section</label>
                            <input type="text" class="form-control" id="section" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="hargajual">Harga Jual</label>
                            <input type="text" class="form-control" id="hargajual" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="hppcogs">HPP COGS</label>
                            <input type="text" class="form-control" id="hppcogs" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="hppkonsi">HPP Konsi</label>
                            <input type="text" class="form-control" id="hppkonsi" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="hppbagihasil">HPP Bagi Hasil</label>
                            <input type="text" class="form-control" id="hppbagihasil" placeholder="">
                        </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-success">Create</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection