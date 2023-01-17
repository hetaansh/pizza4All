@extends('master')
@section('content')
<div class="container" style="height: 600px; padding-top:50px">
    <div class="row">
        <div style="margin-left:auto; margin-right:auto">

            <form action="register" method="post">
            @csrf
                <div class="form-group">
                   
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <button type="submit" class="btn btn-default">Sign Up</button>
            </form>
        </div>
    </div>
</div>

@endsection