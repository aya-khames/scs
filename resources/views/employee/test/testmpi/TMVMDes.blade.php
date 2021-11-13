@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 30px; font-weight: bold">Test_MPI & Visual_MPI</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='tmvmn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='tmvmp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1280px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Report No.</label> <input class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="showTable('table')">Search</a>
                    </span>
                        <a class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label> <input readonly disabled id="work" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">Client:</label> <input readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Proof load:</label> <input disabled id="pl" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">QTY:</label> <input disabled id="qty" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 17px; width: 140px">Safe working load:</label> <input disabled id="safe" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">ID No.</label> <input disabled id="idNumber" class="text2" style="width: 400px" type="number">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea disabled id="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn">Delete</button>
                            <button class="bttn">Edit</button>
                            <button class="bttn">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
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
