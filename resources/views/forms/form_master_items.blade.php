@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
    <h3>Master Items</h3>
        <div class="card">
        <div class="float-right">
        <div class="input-group">
            <button type="button" class="btn btn-primary mr-3 rounded">Add item</button>
            <input type="search" class="form-control ml-3 rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
            <button type="button" class="btn btn-outline-primary">Search</button>
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
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</main>
    <!-- <div class="container-fluid">
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
        </div> -->
@endsection