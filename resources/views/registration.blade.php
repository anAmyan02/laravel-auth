@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <form action="{{route('registration.post')}}" method="POST"  class= "ms-auto me-auto mt-auto" style = "width:500px">
            @csrf
            <div class="mb-3">
                <label for="exampleInputFullname1" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="exampleInputFullName1" name = "name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name = "email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection