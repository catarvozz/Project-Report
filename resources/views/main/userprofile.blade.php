@extends('layouts/main')

@section('container')
    <div class="container-fluid">
        <div class="mb-3 mt-3">
            <h3>Profile</h3>
            <img src="../../../../img/userprofpic.jpg" class="icformprofile"/>
            <div class="form-group">
                <small>Nama</small>
                <input type="text" name="oldpwd" value="Evydian Rosa Putri" class="form-control">
            </div>
            <div class="form-group">
                <small>Username</small>
                <input type="text" name="oldpwd" value="it.evydian" class="form-control" disabled>
            </div>
            <div class="form-group">
                <small>Password</small> <small><a href="{{ route('userpassword') }}" class="btn btn-link">Change password</a></small>
                <input type="password" name="oldpwd" value="it.evydian" class="form-control" disabled>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </div>
@endsection