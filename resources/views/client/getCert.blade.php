@extends('layouts.layout')
@section('content')
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <div style="width: 1000px">
                    <img class="logo" src="./assets/img/logo.ico" style="size: A5" alt="SCS">
                    <h1 class="fst-italic lh-1 mb-4">SCS</h1>
                </div>
                <br>
                <br>
                <form method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="number"  style="width: 500px; height: 50px; color: #2a5555; font-weight: bolder" class="form-control" placeholder="Enter the certificate number" aria-label="certificate_id" aria-describedby="basic-addon1">
                    </div>
                    <button class="login" type="submit" onclick="get_action1(this.form)" style="margin-top: 50px; color: white; margin-bottom: 10px; border: 2px rgba(255, 255, 255, 0.15); box-shadow: 0 0 15px gainsboro;width: auto; margin-left: 170px">Get Certificate</button>
                    <a>
                        <button class="login" type="submit" onclick="get_action2(this.form)" style="margin-top: 20px; color: white; background-color: #670a15; margin-bottom: 10px; border: 2px rgba(255, 255, 255, 0.15); box-shadow: 0 0 15px gainsboro;width: auto; margin-left: 200px">LOG OUT</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
         function get_action1(form) {
         }
         function get_action2(form) {
             form.action = "{{ route('logout') }}";
         }
    </script>
@stop
