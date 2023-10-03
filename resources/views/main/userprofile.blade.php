@extends('layouts/main')

@section('container')
<main class="content px-3 py-2">
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
                <small>Password</small>
                <input type="password" name="oldpwd" value="it.evydian" class="form-control" disabled>
            </div>
            <div>
                <button class="btn btn-outline-success" type="submit">Save</button>
            </div>
        </div>
    </div>
</main>
@endsection