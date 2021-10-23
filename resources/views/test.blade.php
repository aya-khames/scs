@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Crane</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: 0 0 0 15px" class="navbar navbar-expand-lg navbar-light bg-white">
                <div>
                    <a class="lab tab">
                        New
                    </a>
                    <a class="lab tab">
                        Print
                    </a>
                    <a class="lab tab">
                        Search
                    </a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Address:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Certificate No:</label> <input class="text2" style="width: 150px" type="text"></span>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Certificate Type:</label> <input class="text2" style="width: 150px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Date:</label> <input class="Date text2" style="width: 400px" type="date">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Crane No:</label> <input class="text2" style="width: 150px" type="text"></span>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Crane Type:</label> <input class="text2" style="width: 150px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Place of INSP:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Manufacturer Name:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Type of Crane:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Manufacturer Address:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">The Crane Was first Input use In :</label> <input class="Date text2" style="width: 400px" type="date">
                    <label class="lab" style="font-size: 20px; width: 130px">Make and Type of Automatic Safe Load indicator(Se Regulation 30):</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Makers Serial Number:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Make and Type of Derricking Interlock(Se Regulation 22):</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Owner Distinguishing Mark of Number(if any):</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Date of the last previous crane test:</label> <input class="Date text2" style="width: 400px" type="date">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date of the last previous thorough crane test:</label> <input class="Date text2" style="width: 400px" type="date"></span>
                    <table>
                        <tr>
                            <td>Length of jib(Meter)</td>
                            <td>Radius(Meter)</td>
                            <td>Test load(Ton)</td>
                            <td>Safe Working Load(Ton)</td>
                            <td>Counter Weight(Ton)</td>
                            <td>Wire(N)</td>
                        </tr>
                        <tr>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                        </tr>
                        <tr>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                        </tr>
                        <tr>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                        </tr>
                        <tr>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                            <td><input class="text2"type="text"></td>
                        </tr>
                    </table>
                    <label class="lab" style="font-size: 20px; width: 130px">In case the crane has derricking jib or jib max radius at which the jib may be worked in meters:</label> <input class="Date text2" style="width: 400px" type="date">
                    <label class="lab" style="font-size: 20px; width: 130px">Defects noted and alternations or repairs required before putting the crane into services (state NONE if there isn't any):</label> <input class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px">Signature and Stamp of SCS Reviewing by:</label> <input class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Name of Person Conducting Examination:</label> <input class="text2" style="width: 400px" type="text"></span>

                    <!--
                                        <p class="lab" style="font-size: 20px; width: 130px">Is this the first examination:</p>
                                        <input type="radio" id = "test" value ="Test">
                                        <label for="test">Yes</label>
                                        <input type="radio" id = "test2" value ="Test">
                                        <label for="test2">No</label>
                                        <span>
                                            <a href="#" style="padding: unset">
                                                <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <option value="" disabled selected>The Examination was within</option>
                                                    <option value="" >6 months</option>
                                                    <option value="" >12 months</option>
                                                </select>
                                            </a>
                                        </span>
                                        <a href="#" style="padding: unset">
                                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <option value="" disabled selected>The Examination was</option>
                                                <option value="" >In accordance with an examination scheme </option>
                                                <option value="" >After exceptional circumstances</option>
                                            </select>
                                        </a>
                                        <label class="lab" style="font-size: 20px; width: 130px">Identify any defected part which is or could be dangerous and describe the defect:</label> <input class="text2" style="width: 400px" type="text">
                                        <a href="#" style="padding: unset">
                                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <option value="" disabled selected>Is the defect</option>
                                                <option value="" >dangerous</option>
                                                <option value="" >could be dangerous</option>
                                            </select>
                                        </a>
                                        <label class="lab" style="font-size: 20px; width: 130px">Particulars of any repair, renewal or alteration required to remedy the defect:</label> <input class=" text2" style="width: 400px" type="text">
                                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Particulars of any tests carried as part of examination(State NONE if there isn't any):</label> <input class="text2" style="width: 400px" type="text"></span>
                                        <a href="#" style="padding: unset">
                                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <option value="" disabled selected>Is the Equipment</option>
                                                <option value="" >Safe to operate</option>
                                                <option value="" >Not safe</option>
                                            </select>
                                        </a>

                                        <label class="lab" style="font-size: 20px; width: 130px"> Test Date:</label> <input class="Date text2" style="width: 400px" type="date">
                                        <label class="lab" style="font-size: 20px; width: 130px">Report Maker:</label> <input class=" text2" style="width: 400px" type="text">
                                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Report Authenticator:</label> <input class="text2" style="width: 400px" type="text"></span>-->
                    <label class="lab" style="font-size: 20px; width: 130px">Report Maker:</label> <input class="Date text2" style="width: 400px" type="date">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Report Authenticator:</label> <input class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px"> Latest Date for Thorough Examination:</label> <input class="Date text2" style="width: 400px" type="date">
                    <label class="lab" style="font-size: 20px; width: 130px">Report Maker and Authenticator Manager:</label> <input class=" text2" style="width: 400px" type="text">

                    <br><br>
                    <div style="margin-left: 490px">
                        <button class="bttn">Edit</button><button class="bttn">Insert</button>
                    </div>
                </div>
            </form>
           <!-- <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1100px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Report No:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Date of Report:</label> <input class="Date text2" style="width: 300px" type="text" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input class="Date text2" style="width: 300px" type="date" ></span> <span class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">ID No:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">RN MPI:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Hire OFF:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Date OFF:</label> <input class="Date text2" style="width: 300px" type="text" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input class="Date text2" style="width: 300px" type="text" ></span> <span class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Delivery Note:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>

                    <br>
                </div>
            </form> -->
        </fieldset>
    </div>
@stop
