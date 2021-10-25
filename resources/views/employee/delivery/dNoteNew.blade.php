@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Delivery Note</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='dnoted';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='dnotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Client</option>
                        </select>
                    </a>
                    <span>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Work Order:</label>
                        <a style="padding: unset">
                            <select disabled class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Work Order</option>
                            </select>
                        </a>
                    </span>
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label> <input disabled class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Delivery Time:</label>
                        <input disabled class="Date text2" style="width: 190px" type="date">
                        <input disabled class="Date text2" style="width: 195px" type="text">
                    </span>
                    <label class="lab" style="font-size: 20px; width: 130px">PO No:</label> <input disabled class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">REQ NO:</label> <input disabled class="text2" style="width: 400px" type="text"></span>
                    <br><br>
                    <div style="margin-left: 490px">
                        <button class="bttn">Edit</button><button class="bttn">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <span style="width: 80px" class="sp"><a href="#">Search</a></span> <br>

                    <label class="lab" style="font-size: 20px; width: 130px">Date:</label>
                    <input class="Date text2" style="width: 175px" type="date" >
                    <span>
                        <label class="lab" style="font-size: 20px; width: auto; margin: 5px">To:</label>
                        <input class="Date text2" style="width: 170px" type="date">
                    </span> <span class="sp"><a href="#">Search</a></span><br>

                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <span style="width: 80px" class="sp"><a href="#">Search</a></span> <br>

                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <span style="width: 80px" class="sp"><a href="#">Search</a></span> <br>
                </div>
            </form>
        </fieldset>
    </div>
@stop
