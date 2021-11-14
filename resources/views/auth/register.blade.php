@extends('layouts.layout')
@section('content')
    <!-- Masthead-->
    <div class="masthead" style=" max-height: unset; height: 100%; position: absolute"></div>
    <div class="masthead-content text-white" style="max-width: unset; width: 100%; position: absolute; top: 5%; z-index: 3">
    <div class="container-fluid px-4 px-lg-0" style="margin: auto">
        <div style="width: 500px; height: 200px; margin: auto">
            <img style="height: 200px; width: 200px" src="./assets/img/logo.ico" alt="SCS">
            <h1 style="" class="fst-italic lh-1 mb-4">SCS</h1>
        </div>
        <br><br>
        <form style="width: 550px; margin: auto; display: block" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <div id="log4">
                    <label for="firstName">First Name</label>
                    <input style="width: 165px" name = "first_name" id="log3" type="text" class="form-control" id="firstName" placeholder="Enter the first name">
                    @error('first_name')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div id="log5">
                    <label for="lastName">Last Name</label>
                    <input name = "last_name" style="width: 165px" id="log3" type="text" class="form-control" id="lastName" placeholder="Enter the last name">
                    @error('last_name')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <br>
                <label for="userName">Username</label><br>
                <input id="log1" name = "user_name" type="text" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Try a not-used username">
                @error('user_name')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
                <div id="log2" class="dropdown">
                    <select name = "position" class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option value="" disabled selected>User Type</option>
                        <option class="dropdown-item">Accountant</option>
                        <option class="dropdown-item">Administrator</option>
                        <option class="dropdown-item">Client</option>
                        <option class="dropdown-item">Manager</option>
                        <option class="dropdown-item">Operation</option>
                        <option class="dropdown-item">Secretary</option>
                    </select>
                    @error('position')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <br>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name = "password" id="log3" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input name = "password_confirmation" id="log3" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                <small class="from-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit"class="login" type="button">Create</button>
        </form>
    </div>
</div>
@stop
