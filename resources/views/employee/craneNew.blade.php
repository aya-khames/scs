@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
        <fieldset style="overflow-y: auto">
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Crane</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='cranep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='cranes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <form style="margin: 20px 20px 0 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <div style="display: inline-block; width: 555px">
                            <label class="lab" style="font-size: 20px; width: 140px">Client:</label>
                            <a style="padding: unset">
                                <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label>
                            <a style="padding: unset">
                                <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Date:</label>
                            <input class="Date text2" style="width: 190px" type="date">
                            <input class="Date text2" style="width: 195px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Place of Insp:</label>
                            <input class="Date text2" style="width: 400px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Type of Crane:</label><br>
                            <textarea disabled class="text2" style="resize: none; width: 400px; height: 220px; margin-left: 150px"></textarea>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 500px">Make and type of Automatic Safe Load indicator, required (see regulation 30)</label>
                            <br><input class="Date text2" style="width: 400px; margin-left: 140px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 450px">Make and type of Derricking Interlock, if required (see regulation 22)</label>
                            <br><input class="Date text2" style="width: 400px; margin-left: 140px" type="text">
                            <br>
                        </div>
                        <div style="display: inline-block; margin-left: 20px; width: 615px">
                            <label class="lab" style="font-size: 20px; width: 130px">Address:</label>
                            <a style="padding: unset">
                                <select style="width: 470px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">CERT NO.</label>
                            <input class="Date text2" style="width: 140px" type="text">
                            <label class="lab" style="font-size: 20px; width: 150px; margin-left: 20px">CERT type:</label>
                            <a style="padding: unset">
                                <select style="width: 140px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">Crane Type:</label>
                            <a style="padding: unset">
                                <select style="width: 140px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 150px; margin-left: 20px">Work by month:</label>
                            <a style="padding: unset">
                                <select style="width: 140px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Name of manufacturer of Crane:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Address of manufacturer of Crane:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date Crane was first input use:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Makers serial number:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Owner distinguishing mark of number (if any):</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date of last previous test of Crane:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date of last previous thorough examination of Crane:</label>
                            <input class="Date text2" style="width: 350px" type="text">
                        </div>
                    </div>
                </form>
                <br>
                <label class="lab" style="font-size: 20px; font-style: italic; width: 350px; margin-left: 40px">Safe Working Load or Loads:</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label style="margin: 10px 10px 10px 30px; font-size: 16px; width: 180px" class="lab">Length of Jib (Meter)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Radius (Meter)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Test Load (Ton)</label>
                        <label style="margin: 10px 20px 10px 0;font-size: 16px; width: 180px" class="lab">Safe Working Load (Ton)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Counter Weight (Ton)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Wire (meter)</label>
                        <br>
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <input class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">
                            In case of a crane with a derricking jib or jib the maximum radius at which the jib or jib may be worked in meters.
                        </label>
                        <textarea disabled class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 500px">
                            Defects or deficiencies noted and aleration or repairs require before putting the crane into service (if none enter NONE).
                        </label>
                        <textarea disabled class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                        <label class="lab" style="font-size: 18px; width: 280px">Signature and Stamp of Safety Control Service Reviewing By:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name of person conducting Examination:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </div>
                </form>
                <div style="margin-left: 530px">
                    <button disabled class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)"><< Back</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Next >></button>
                </div>
            </div>
        </fieldset>
    </div>
@stop
