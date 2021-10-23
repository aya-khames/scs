@extends('layouts.layout')
@section('content')
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <div style="width: 1000px">
                    <img class="logo" src="./assets/img/logo.ico" alt="SCS">
                    <h1 class="fst-italic lh-1 mb-4">SCS</h1>
                </div>
                <br><br><br>
                <form method="POST" action="{{route('log')}}">
                    @csrf
                    <div class="form-group">
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
                    <button type="submit"class="login" type="button">Create</button>
                </form>
            </div>
        </div>
    </div>
@stop
