@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Delivery Note</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='dnoten';" class="lab tab">
                    <a>New</a>
                    </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='dnotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label> <input class="text2" style="width: 400px" type="text">
                    <span class="sp">
                        <a style="margin-left: 10px" href="#">Search</a>
                    </span>
                    <a class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input disabled class="text2" style="width: 400px" type="text">
                    <span> <a class="sp" style="margin-left: 10px; text-decoration: none">Search</a> <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Client:</label> <input disabled class="text2" style="width: 400px" type="text"></span>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                    <label class="lab" style="font-size: 20px; width: 60px; margin-left: 510px">QTY:</label><input disabled class="text2" style="width: 135px; margin-top: 10px" type="text">
                    <label class="lab" style="font-size: 20px; width: 110px; margin-left: 5px">ID Number:</label><input disabled class="text2" style="width: 135px" type="number">
                    <br>
                    <textarea disabled class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                    <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button class="bttn">Print</button><button class="bttn">Delete</button><button class="bttn">Insert</button>
                        </div>
                    </span>
                </div>
            </form>
        </fieldset>
    </div>
@stop
