@extends('layouts/main')

@section('container')
<!-- tabel master -->
<!-- <main class="content px-3 py-2">
    <div class="container-fluid">
    <h3>Master Item</h3>
        <div class="card">
        <div class="float-right">
        <div class="input-group">
            <button type="button" class="btn btn-success mr-3 rounded">Add item</button>
            <input type="search" class="form-control ml-3 rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
            <button type="button" class="btn btn-outline-success">Search</button>
        </div>
        </div>

        <div class="card-body table-responsive">
        <table class="table table-hover table responsive">
            <thead>
                <th>ID ITEM</th>
                <th>ITEM MENU</th>
                <th>KATEGORI</th>
                <th>SUB KATEGORI</th>
                <th>MFG</th>
                <th>SECTION</th>
                <th>HARGA JUAL</th>
                <th>HPP COGS</th>
                <th>HPP KONSI</th>
                <th>HPP BAGI HASIL</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>
                    <button type="button" class="btn btn-warning text-white btn-sm"><i class="fa-solid fa-pen-to-square white"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>    
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
        
        <a href="your_url_here">
            <div class="card" style="width: 100%; height: 65px; border-radius: 10px; background-color: #169870; color:#ffff">
                <h4 style="float: left; margin: 5px;">Add new item</h4>
                <i class="fa-solid fa-angle-right mr-2 mt-2" style="float: right; font-size:30px"></i>
               
            </div>
        </a>
    </div>
</main> -->

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