@extends('layouts/main')

@section('container')
            <div class="container-fluid">
            <br><h3>Form Master Users </h3>
                <div class="card">
                    <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputNama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputUsername">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAccess" class="form-label">Level Access</label>
                            <select id="inputAccess" class="form-select">
                            <option selected>Choose...</option>
                            <option>Level 1</option>
                            <option>Level 2</option>
                            <option>Level 3</option>
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