@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="d-flex">
                <h4 class="mb-0" id="title">MASTER ITEMS</h4>
            </div>
            <div class="d-flex flex-row mt-3 mt-md-0">
                <button class="btn btn-dark text-white dropdown-toggle mr-3" type="button" aria-expanded="false">
                    <i class="fa-solid fa-file-import"></i>
                </button>
                <div class="dropdown">
                    <button class="btn btn-primary text-white dropdown-toggle" id="buttondownload" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-download"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Download as Excel</a></li>
                        <li><a class= "dropdown-item" href="#">Download as PDF</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="float-right">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="kolomsearch">
                    <button type="button" class="btn btn-outline-success mr-3 rounded"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <a href="{{ route('formmasteritems') }}" class="btn btn-success mr-3 rounded"><i class="fa-solid fa-plus mt-1"></i></a>  
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
                            <td><a href="{{ route('formeditmasteritem') }}" class="btn btn-warning text-white" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                            <td><a class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection