@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">NDT M.P.I</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='mpin';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">CERT No.</label> <input class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 20px" href="#">Search</a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <br>
                    <span>
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <input class="text2" style="width: 400px" type="text">
                    </span>
                    <br>
                </div>
            </form>
            <div style="margin-left: 460px; display: inline-block">
                <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
            </div>
        </fieldset>
    </div>
@stop
