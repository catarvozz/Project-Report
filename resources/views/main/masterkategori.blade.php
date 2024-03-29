@extends('layouts/main')

@section('container')
<!-- tabel master -->
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h4 id="title">MASTER KATEGORI</h4>
            <div class="d-flex">
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
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="kolomsearch">
                    <button type="button" class="btn btn-outline-success mr-3 rounded"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <a href="{{ route('formmasterkategori') }}" class="btn btn-success mr-3 rounded"><i class="fa-solid fa-plus mt-1"></i></a>  
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table responsive">
                    <thead id="yellowstrip">
                        <th>ID KATEGORI</th>
                        <th>NAMA</th>
                        <th>KETERANGAN</th>
                        <th colspan="2">ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td style="max-width: 10px;"><a href="{{ route('formeditmasterkategori') }}" class="btn btn-warning text-white" id="edit"><i class="fa-solid fa-pen-to-square" id="smallpen"></i></a></td>
                            <td style="max-width: 10px;"><a class="btn btn-danger text-white" id="delete"><i class="fa-solid fa-trash-can" id="smalltrash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection