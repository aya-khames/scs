@extends('layouts.layout')
@section('content')
    <!-- Masthead-->
    <div class="masthead" style=" max-height: unset; height: 100%; position: absolute"></div>
    <div class="masthead-content text-white" style="max-width: unset; width: 100%; position: absolute; top: 10%; z-index: 3">
        <div class="container-fluid px-4 px-lg-0" style="margin: auto">
            <div style="width: 500px; margin: auto">
                <img src="./assets/img/logo.ico" alt="SCS">
                <h1 class="fst-italic lh-1 mb-4">SCS</h1>
            </div>
            <br><br><br>
            <form style="width: 550px; margin: auto; display: block" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label><br>
                    <input name = "user_name" id="log1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your username">
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
                    </div>
                    <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name = "password" id="log3" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="login" type="button" >Sign In</button>
            </form>
        </div>
    </div>
@stop
