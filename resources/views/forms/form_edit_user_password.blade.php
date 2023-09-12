@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <div class="mb-3 mt-3">
        <h3>Change Password</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" name="oldpwd" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="newpwd" value="" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection