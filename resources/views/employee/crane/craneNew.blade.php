@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
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
            <form style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <div style="margin: 20px 20px 0 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <div style="display: inline-block; width: 555px">
                            <label class="lab" style="font-size: 20px; width: 140px">Client:</label>
                            <a style="padding: unset">
                                <select class="miniDrop2" id="client" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label>
                            <a style="padding: unset">
                                <select class="miniDrop2" disabled id="work" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Date:</label>
                            <input disabled id="date1" class="Date text2" style="width: 190px" type="date">
                            <input disabled readonly id="date2" class="Date text2" style="width: 195px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Place of Insp:</label>
                            <input disabled id="placeOfInsp" class="Date text2" style="width: 400px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 140px">Type of Crane:</label><br>
                            <textarea id="typeOfCrane" disabled class="text2" style="resize: none; width: 400px; height: 220px; margin-left: 150px"></textarea>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 500px">Make and type of Automatic Safe Load indicator, required (see regulation 30)</label>
                            <br><input disabled id="makeType" class="Date text2" style="width: 400px; margin-left: 140px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 450px">Make and type of Derricking Interlock, if required (see regulation 22)</label>
                            <br><input disabled id="makeType2" class="Date text2" style="width: 400px; margin-left: 140px" type="text">
                            <br>
                        </div>
                        <div style="display: inline-block; margin-left: 20px; width: 615px">
                            <label class="lab" style="font-size: 20px; width: 130px">Address:</label>
                            <a style="padding: unset">
                                <select style="width: 470px" disabled id="address" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">CERT NO.</label>
                            <input disabled id="certNo" class="Date text2" style="width: 140px" type="text">
                            <label class="lab" style="font-size: 20px; width: 150px; margin-left: 20px">CERT type:</label>
                            <a style="padding: unset">
                                <select style="width: 140px" disabled id="certType" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">Crane Type:</label>
                            <a style="padding: unset">
                                <select style="width: 140px"  id="craneType" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>Crawler Crane</option>
                                    <option>Tower Crane</option>
                                    <option>Mobile Crane</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 150px; margin-left: 20px">Work by month:</label>
                            <a style="padding: unset">
                                <select style="width: 140px" disabled id="workByM" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>6 Months</option>
                                    <option selected>12 Months</option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Name of manufacturer of Crane:</label>
                            <input disabled id="nameOfMOfC" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Address of manufacturer of Crane:</label>
                            <input disabled id="addressOfMOfC" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date Crane was first input use:</label>
                            <input disabled id="dateFirst" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Makers serial number:</label>
                            <input disabled id="serialNo" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Owner distinguishing mark of number (if any):</label>
                            <input disabled id="owner" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date of last previous test of Crane:</label>
                            <input disabled id="dateLast" class="Date text2" style="width: 350px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 250px">Date of last previous thorough examination of Crane:</label>
                            <input disabled id="dateLast2" class="Date text2" style="width: 350px" type="text">
                        </div>
                    </div>
                </div>
                <br>
                <label class="lab" style="font-size: 20px; font-style: italic; width: 350px; margin-left: 40px">Safe Working Load or Loads:</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label style="margin: 10px 10px 10px 30px; font-size: 16px; width: 180px" class="lab">Length of Jib (Meter)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Radius (Meter)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Test Load (Ton)</label>
                        <label style="margin: 10px 20px 10px 0;font-size: 16px; width: 180px" class="lab">Safe Working Load (Ton)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Counter Weight (Ton)</label>
                        <label style="margin: 10px; font-size: 16px; width: 180px" class="lab">Wire (meter)</label>
                        <br>
                        <input disabled id="box1" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box2" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box3" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box4" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box5" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box6" class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input disabled id="box7" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box8" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box9" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box10" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box11" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box12" class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input disabled id="box13" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box14" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box15" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box16" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box17" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box18" class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input disabled id="box19" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box20" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box21" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box22" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box23" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box24" class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                        <input disabled id="box25" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box26" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box27" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box28" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box29" class="text2" style="width: 180px; margin: 10px" type="text">
                        <input disabled id="box30" class="text2" style="width: 180px; margin: 10px" type="text">
                        <br>
                    </div>
                </div>
                <br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">
                            In case of a crane with a derricking jib or jib the maximum radius at which the jib or jib may be worked in meters.
                        </label>
                        <textarea disabled id="textArea1" class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 500px">
                            Defects or deficiencies noted and aleration or repairs require before putting the crane into service (if none enter NONE).
                        </label>
                        <textarea disabled id="textArea2" class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                    </div>
                </div>
                <br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px">
                        <label class="lab" style="font-size: 18px; width: 280px">Signature and Stamp of Safety Control Service Reviewing By:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" disabled id="drop1" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name of person conducting Examination:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" disabled id="drop2" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </div>
                </div>
                <br>
                <div style="margin-left: 550px">
                    <button disabled class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)"><< Back</button>
                    <button id="next" class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Next >></button>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        // $('#next').click( function () {
        //     console.log("222");
        //     if(document.getElementById('craneType').value === "Crawler Crane") {
        //         console.log("111");
        //         location.href = 'crawler';
        //     }else if (document.getElementById('craneType').value === "Tower Crane") {
        //         location.href = 'tower';
        //     }else {
        //         location.href = 'mob';
        //     }
        // });
    </script>
@stop
