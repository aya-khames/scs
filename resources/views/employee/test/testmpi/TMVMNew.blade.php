@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1370px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Test_MPI & Visual_MPI</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div   class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='tmvmd';"class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='tmvmp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; width: 1355px; height: 600px; overflow-y: auto">
                <form style="margin: 5px; width: 1320px">
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: 160px">Client:</label>
                            <a style="padding: unset">
                                <select id="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>11</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Address:</label>
                            <input disabled readonly id="address" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 160px">Work Order:</label>
                            <a style="padding: unset">
                                <select disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>111</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Report No.</label>
                            <input disabled readonly id="reportNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 160px">Report Date:</label>
                            <input disabled id="date1" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date2" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of thorough examination:</label>
                            <input disabled id="date3" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date4" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 160px">Date of manufacture if known:</label>
                            <input disabled id="date5" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date6" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of next thorough examination:</label>
                            <a style="padding: unset">
                                <select disabled id="dropDate" style="width: 190px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>6 Months</option>
                                    <option>1 Year</option>
                                </select>
                            </a>
                            <input disabled id="dateTxt" class="Date text2" style="width: 195px" type="text">
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: auto">Examination Type:</label>
                            <input disabled type="radio" name="radio1" id="box1" style="margin-left: 20px"><label for="box1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Test-MPI</label>
                            <input disabled type="radio" name="radio1" id="box2" style="margin-left: 20px"><label for="box2" style="color: #0b3756; font-size: 17px; margin-left: 5px">Visual-MPI</label>
                            <label class="lab" style="font-size: 18px; width: auto; margin-left: 80px">IS THIS EQUIPMENT SAFE TO OPERATE?</label>
                            <input disabled type="radio" name="radio2" id="box3" style="margin-left: 20px"><label for="box3" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input disabled type="radio" name="radio2" id="box4" style="margin-left: 20px"><label for="box4" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: auto">Choose Unit or Sling:</label>
                            <a style="padding: unset">
                                <select disabled id="choose" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>Unit</option>
                                    <option>Sling</option>
                                </select>
                            </a>
                        </div>
                    </div>
                    <label id="label" style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">Sling</label>
                    <div style="margin: 0 20px 20px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: 130px">TESTED BY:</label>
                            <input disabled id="tb" class="Date text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 40px">CERTIFICATE NO.</label>
                            <input disabled id="certNo" class="Date text2" style="width: 400px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">TEST DATE:</label>
                            <input disabled id="date7" class="Date text2" style="width: 190px" type="date">
                            <input disabled id="date8" class="Date text2" style="width: 195px" type="text">
                        </div>
                    </div>
                    <label style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">
                        N.D.T. INSPECTION DETAILS
                    </label>
                    <div style="margin: 0 20px 20px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 10px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                            <label class="lab" style="font-size: 18px; width: 135px">Standard:</label>
                            <input disabled id="s" class="text2" style="width: 200px" type="text" value="BS9934:2001">
                            <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Equipment Type:</label>
                            <input  disabled id="et" class="text2" style="width: 200px" type="text" value="PERMANENT MAGNET">
                            <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Contrast Media:</label>
                            <input  disabled id="cm" class="text2" style="width: 200px" type="text" value="NPT16 WHITE PAINT">
                            <br>
                            <label class="lab" style="font-size: 18px; width: 135px">Test procedure No.</label>
                            <input  disabled id="tpn" class="text2" style="width: 200px" type="text" value="Qp9.5">
                            <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Pole Spacing:</label>
                            <input  disabled id="ps" class="text2" style="width: 200px" type="text" value="100mm">
                            <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Indicator:</label>
                            <input  disabled id="ind" class="text2" style="width: 200px" type="text" value="BLACK INK">
                            <br>
                            <label class="lab" style="font-size: 18px; width: 135px">Inspector:</label>
                            <input  disabled id="ins" class="text2" style="width: 200px" type="text">
                            <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Qualification:</label>
                            <input disabled id="qualification" class="text2" style="width: 200px" type="text" value="ASNT L11">
                            <br>
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 280px">Name of person making this report:</label>
                            <a style="padding: unset">
                                <select disabled id="drop1" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name of person authenticating this report:</label>
                            <a style="padding: unset">
                                <select disabled id="drop2" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 18px; width: 280px">Latest date by which next thorough examination must be carried out:</label>
                            <input disabled readonly id="datee" class="text2" style="width: 300px" type="text">
                            <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name and address of employer of persons making and authenticating this report:</label>
                            <a style="padding: unset">
                                <select disabled id="drop3" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div style="margin-left: 530px">
                        <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                        <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                    </div>
                </form>
                <form style="margin: 5px; width: 1320px">
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 90px">Report No:</label>
                            <input class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                            <label class="lab" style="font-size: 18px; width: 110px; margin-left: 30px">Report Date:</label>
                            <input class="Date text2" style="width: 120px" type="date">
                            <label class="lab" style="font-size: 20px; width: auto; margin-left: 8px">To:</label>
                            <input class="Date text2" style="width: 125px" type="date" >
                            <span class="sp"><a href="#">Search</a></span>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 90px">ID NO.</label>
                            <input class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                            <label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">R.N TV:</label>
                            <input class="Date text2" style="width: 300px" type="text">
                            <span class="sp"><a href="#">Search</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $('#client').change(function () {
            document.getElementById('address').disabled = false;
            document.getElementById('work').disabled = false;
        });
        $('#work').change(function () {
            console.log("hii");
            document.getElementById('reportNo').disabled = false;
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('date3').disabled = false;
            document.getElementById('date4').disabled = false;
            document.getElementById('date5').disabled = false;
            document.getElementById('date6').disabled = false;
            document.getElementById('dropDate').disabled = false;
            document.getElementById('dateTxt').disabled = false;
            document.getElementById('box1').disabled = false;
            document.getElementById('box2').disabled = false;
            document.getElementById('box3').disabled = false;
            document.getElementById('box4').disabled = false;
            document.getElementById('choose').disabled = false;
            document.getElementById('s').disabled = false;
            document.getElementById('et').disabled = false;
            document.getElementById('cm').disabled = false;
            document.getElementById('tpn').disabled = false;
            document.getElementById('ps').disabled = false;
            document.getElementById('ind').disabled = false;
            document.getElementById('ins').disabled = false;
            document.getElementById('qualification').disabled = false;
            document.getElementById('drop1').disabled = false;
            document.getElementById('drop2').disabled = false;
            document.getElementById('drop3').disabled = false;
            document.getElementById('datee').disabled = false;
        });
        $('#choose').change(function () {
            document.getElementById('label').innerHTML = this.value;
            document.getElementById('tb').disabled = false;
            document.getElementById('certNo').disabled = false;
            document.getElementById('date7').disabled = false;
            document.getElementById('date8').disabled = false;
        });
    </script>
@stop
