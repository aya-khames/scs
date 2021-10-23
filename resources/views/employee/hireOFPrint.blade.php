@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Hire On/Off</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='hireofn';" class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br><br><br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Hire On:</label>
                    <input class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 10px; margin-right: 10px" href="#">Search</a>
                    <label class="lab" style="font-size: 20px; width: 80px">Hire Off:</label>
                    <input class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 10px" href="#">Search</a><br>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label> <input disabled class="text2" style="width: 400px" type="text">
                    <span>
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 80px">Client:</label>
                        <input disabled class="text2" style="width: 400px" type="text">
                    </span>
                    <div style="margin-left: 910px; display: inline-block">
                        <button class="bttn" style="width: 200px">Print with logo</button>
                        <br>
                        <button class="bttn" style="width: 200px">Print without logo</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
@stop
