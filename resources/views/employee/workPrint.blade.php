@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Work Order</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='workn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='workd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br><br><br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 20px" href="#">Search</a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label>
                    <input disabled class="text2" style="width: 400px" type="text">
                    <span>
                            <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label>
                            <input disabled class="text2" style="width: 400px" type="text">
                        </span>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 200px">Terms of payment:</label>
                    <br>
                    <span>
                        <textarea readonly class="text2" style="width: 400px; height: 50px; resize: none; margin-left: 145px; scroll-behavior: smooth; display: inline-block">Maximum ONE MONTH from invoice date.</textarea>
                    </span>
                </div>
                <div style="margin-bottom: 20px; margin-left: 400px; display: inline-block">
                    <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                    <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
                </div>
            </form>
        </fieldset>
    </div>
@stop
