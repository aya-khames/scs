@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Wall Thickness</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='walld';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='wallp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>

            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                        </select>
                    </a>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Location:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                        </select>
                    </a>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Report No.</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Report Date:</label> <input class="Date text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">ID No.</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Material:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Details 1:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <div style="display: inline-block; height: 100px">
                        <label class="lab" style="font-size: 17px; width: 130px">Name Inspected:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <br>
                        <label class="lab" style="font-size: 17px; width: 130px"> Name Approved:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </div>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Details 2:</label>
                    <input type="text" disabled class="text2" style="display: inline-block; width: 400px; height: 100px; resize: none">
                    <br>
                    <div style="margin-left: 490px">
                        <button class="bttn">Edit</button><button class="bttn">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Report No.</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Date:</label> <input class="Date text2" style="width: 190px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 5px">To:</label> <input class="Date text2" style="width: 190px" type="date" ></span> <span class="sp"><a
                            href="#">Search</a>
                    </span>
                </div>
            </form>
        </fieldset>
    </div>
@stop
