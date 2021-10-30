@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Crane</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='cranen';" class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
                <div onclick="location.href='cranes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 110px">CERT No.</label>
                    <input class="text2" style="width: 400px" type="text">
                    <a class="sp" style="margin-left: 20px" href="#">Search</a>
                    <label class="lab" style="font-size: 20px; width: 120px; margin-left: 20px">Work Order:</label>
                    <input disabled id="work" class="text2" style="width: 400px" type="text">
                    <br>
                    <label class="lab" style="font-size: 20px; width: 110px">Client:</label>
                    <input disabled id="client" class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 120px; margin-left: 100px">Crane Type:</label>
                    <input disabled id="craneT" class="text2" style="width: 400px" type="text">
                    <br>
                    <label class="lab" style="font-size: 20px; width: 110px">CERT End:</label>
                    <input disabled id="certEnd" class="text2" style="width: 400px" type="text">
                    <br>
                </div>
                <div style="margin-left: 460px; margin-bottom: 20px">
                    <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                    <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
                </div>
            </form>
        </fieldset>
    </div>
@stop
