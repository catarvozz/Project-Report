@extends('layouts/main')

@section('container')
<!-- tabel master -->
<main class="content px-3 py-2">
    <div class="container-fluid">
    <h3>Master Item</h3>
        <div class="card">
        <div class="float-left">
            <button class="btn btn-warning text-white"><i class="fa-solid fa-file-excel"></i> Excel</button>
        </div>
        <div class="float-right">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                <button type="button" class="btn btn-outline-success mr-3 rounded">Search</button>
                <a href="{{ route('formmasteritems') }}" class="btn btn-success mr-3 rounded"><i class="fa-solid fa-plus"></i></a>  
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
        
        <!-- <a href="{{ route('formmasteritems') }}">
            <div class="card" style="width: 100%; height: 65px; border-radius: 10px; background-color: #169870; color:#ffff">
                <h4 style="float: left; margin: 5px;">Add new item</h4>
                <i class="fa-solid fa-angle-right mr-2 mt-2" style="float: right; font-size:30px"></i>
               
            </div>
        </a> -->
    </div>
</main>

@endsection