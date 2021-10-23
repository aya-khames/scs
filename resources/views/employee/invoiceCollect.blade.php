@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Invoice</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='invn';" class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='invd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='invp';" class="lab tab">
                    <a>Print</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Collect</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 90px">Client:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <a class="sp" style="margin-left: 20px" href="#">Search</a>
                    <label class="lab" style="font-size: 20px; width: 70px; margin-left: 40px">Year:</label>
                    <input class="text2" style="width: 200px" type="text">
                    <a class="sp" style="margin-left: 20px" href="#">Print</a>
                    <a class="sp" style="margin-left: 20px" href="#">Print All</a>
                </div>
            </form>
        </fieldset>
    </div>
@stop
