@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Unsafe</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='unsafen';"  class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='unsafed';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='unsafep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <div style="height: 620px; width: 1290px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1220px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 120px">Report No.</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 25px">Date:</label><input class="Date text2" style="width: 150px" type="date"><span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 120px">Work Order:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 20px">Client:</label> <input class="text2" style="width: 345px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 120px">ID No.</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1220px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1220px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
