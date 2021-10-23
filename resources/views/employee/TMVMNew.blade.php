@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
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
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 160px">Client:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Address:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 160px">Work Order:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Report No.</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 160px">Report Date:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of thorough examination:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 18px; width: 160px">Date of manufacture if known:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of next thorough examination:</label>
                        <a style="padding: unset">
                            <select style="width: 190px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <input class="Date text2" style="width: 195px" type="text">
                    </div>
                </form>


                <form style="margin: 10px 20px 10px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: auto">Examination Type:</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Test-MPI</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Visual-MPI</label>
                        <label class="lab" style="font-size: 18px; width: auto; margin-left: 80px">IS THIS EQUIPMENT SAFE TO OPERATE?</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>


                <label style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">SLING</label>
                <form style="margin: 0 20px 20px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">TESTED BY:</label>
                        <input class="Date text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 18px; width: 170px; margin-left: 40px">CERTIFICATE NO.</label>
                        <input class="Date text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">TEST DATE:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                    </div>
                </form>



                <label style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">
                    N.D.T. INSPECTION DETAILS
                </label>
                <form style="margin: 0 20px 20px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                        <label class="lab" style="font-size: 18px; width: 135px">Standard:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Equipment Type:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Contrast Media:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <br>
                        <label class="lab" style="font-size: 18px; width: 135px">Test procedure No.</label>
                        <input class="text2" style="width: 200px" type="text">
                        <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Pole Spacing:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Indicator:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <br>
                        <label class="lab" style="font-size: 18px; width: 135px">Inspector:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <label class="lab" style="font-size: 18px; width: 135px; margin-left: 20px">Qualification:</label>
                        <input class="text2" style="width: 200px" type="text">
                        <br>
                    </div>
                </form>

                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
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
                </form>
                <div style="margin-left: 530px">
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                </div>
            </div>
        </fieldset>
    </div>
@stop
