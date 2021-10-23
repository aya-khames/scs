@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">NDT M.P.I</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='mpip';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Work Order:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px">CERT No.</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Requisition No.</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Date:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Date of INSP:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Location:</label>
                        <input class="text2" style="width: 400px" type="text">
                    </div>
                </form>
                <form style="margin: 20px; display: inline-block; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                    <div style="padding: 10px">
                        <label class="lab" style="font-size: 20px; width: auto">100% MPI was carried out on critical area of:</label>
                        <br>
                        <textarea class="text2" style="width: 500px; height: 200px; resize: none" type="text"></textarea>
                    </div>
                </form>
                <form style="margin: 20px; margin-left: 0; display: inline-block; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 700px">
                    <div style="padding: 10px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 700px">
                        <label class="lab" style="font-size: 19px; width: 180px">Surface Condition:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 19px; width: 180px">Test Specification:</label>
                        <input class=" text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 18px; width: 180px">Acceptance Standards:</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 180px"> Material:</label>
                        <input class=" text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 19px; width: 180px">Test Procedure No.</label>
                        <input class="text2" style="width: 400px" type="text">
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px"> DYE Penetrant:</label>
                        <input class=" text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 30px">Inspector:</label>
                        <input class="text2" style="width: 400px" type="text">
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 600px; display: inline-block">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 18px; width: 90px">CERT No:</label>
                        <input class="text2" style="width: 300px" type="text">
                        <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 90px">Date:</label>
                        <input class="Date text2" style="width: 120px" type="date">
                        <label class="lab" style="font-size: 20px; width: auto; margin-left: 8px">To:</label>
                        <input class="Date text2" style="width: 125px" type="date" >
                        <span class="sp"><a href="#">Search</a></span>
                    </div>
                </form>
                <div style="margin-left: 250px; display: inline-block">
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                </div>
            </div>
        </fieldset>
    </div>
@stop
