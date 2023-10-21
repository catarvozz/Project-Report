@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h4 id="title">MASTER ITEM</h4>
            <div class="d-flex">
                <button class="btn btn-warning text-white dropdown-toggle mr-3" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-file-import"></i>
                </button>
                <div class="dropdown">
                    <button class="btn btn-primary text-white dropdown-toggle" style="font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-download"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                        <li><a class="dropdown-item" href="#">Download as PDF</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="float-right">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                    <button type="button" class="btn btn-outline-success mr-3 rounded"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <a href="{{ route('formmasteritems') }}" class="btn btn-success mr-3 rounded"><i class="fa-solid fa-plus"></i></a>  
                </div>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover table responsive">
                    <thead id="yellowstrip">
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
                        <th colspan="2">ACTION</th>
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
                            <td><a href="{{ route('formeditmasteritem') }}" class="btn btn-warning text-white btn-sm" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                            <td><a class="btn btn-danger text-white btn-sm" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection