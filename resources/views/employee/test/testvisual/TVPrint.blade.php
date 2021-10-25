@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Test & Visual</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='tvn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='tvd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Report No.</label>
                    <input class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <a class="sp" style="margin-left: 20px" href="#">Search</a>
                    <br><br>
                    <div style="padding: 15px; color: #1a1a1a; box-shadow: 0 0 20px rgba(15,70,108,0.65); background-color: rgba(240,248,248,0.05); overflow-y: auto; height: 100px">
                        <p style="line-height: 1">(a) The lifting operations and lifting equipments regulations 1998 S.I. No. 2307.</p>
                        <p style="line-height: 1">(b) The supply of machinery (safety) regulations 1992 S.I. No. 3073.</p>
                        <p style="line-height: 1">(c) The provision and use of work equipment regulations 1998 S.I. No. 2306.</p>
                    </div>
                </div>
            </form>
            <div style="margin-left: 460px; display: inline-block">
                <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
            </div>
        </fieldset>
    </div>
@stop
