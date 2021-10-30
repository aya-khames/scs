@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Unsafe</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='unsafed';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='unsafep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='unsafes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <form style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <div style="margin: 20px 20px 0 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Client:</label>
                        <a style="padding: unset">
                            <select id="client" name="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 40px">Address:</label>
                        <input readonly disabled name="address" id="address" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label>
                        <a style="padding: unset">
                            <select disabled id="work" name="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 40px">Report No.</label>
                        <input id="report" readonly disabled name="report" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px">Report Date:</label>
                        <input disabled id="date1" name="date1" class="Date text2" style="width: 190px" type="date">
                        <input disabled readonly id="date2" name="date2" class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 18px; width: 110px; margin-left: 40px">ID No.</label>
                        <input disabled id="id" name="ID" class="Date text2" style="width: 400px" type="text">
                    </div>
                </div>

                <div style="display: inline-block; margin: 10px 10px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 500px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 18px; width: 350px; margin-left: 10px">Is this the first examination after installation or assembly at a new site or location?</label>
                        <input disabled type="radio" name="radio1" id="box1" style="margin-left: 10px"><label for="box1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input disabled type="radio" name="radio1" id="box2" style="margin-left: 10px"><label for="box2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        <br><br>
                        <label class="lab" style="font-size: 18px; width: 350px; margin-left: 10px">If YES, has the equipment been installed correctly?</label>
                        <input disabled type="radio" name="radio2" id="box3" style="margin-left: 10px"><label for="box3" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input disabled type="radio" name="radio2" id="box4" style="margin-left: 10px"><label for="box4" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="display: inline-block">
                    <label style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 20px; font-style: italic; font-weight: bold">
                        Was the examination carried out:</label><br>
                    <div style="margin: 10px 20px 10px 10px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 750px">
                        <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 250px; margin-left: 10px">within an interval of 6 months?</label>
                            <input disabled type="radio" name="radio3" id="box5" style="margin-left: 10px"><label for="box5" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input disabled type="radio" name="radio3" id="box6" style="margin-left: 10px"><label for="box6" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <label class="lab" style="font-size: 18px; width: 210px; margin-left: 30px">In accordance with an examination scheme?</label>
                            <input disabled type="radio" name="radio4" id="box7" style="margin-left: 10px"><label for="box7" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input disabled type="radio" name="radio4" id="box8" style="margin-left: 10px"><label for="box8" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <br><br>
                            <label class="lab" style="font-size: 18px; width: 250px; margin-left: 10px">within an interval of 12 months?</label>
                            <input disabled type="radio" name="radio5" id="box9" style="margin-left: 10px"><label for="box9" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input disabled type="radio" name="radio5" id="box10" style="margin-left: 10px"><label for="box10" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <label class="lab" style="font-size: 18px; width: 210px; margin-left: 30px">After the occurrence of exceptional circumstances?</label>
                            <input disabled type="radio" name="radio6" id="box11" style="margin-left: 10px"><label for="box11" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input disabled type="radio" name="radio6" id="box12" style="margin-left: 10px"><label for="box12" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        </div>
                    </div>
                </div>
                <br><br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">Identification of any part found to have a defect which is or could become a danger to persons and a description of the defect:</label>

                        <textarea id="tx1" disabled class="text2" style="resize: none; width: 600px; height: 80px"></textarea>
                    </div>
                </div>
                <br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: auto">Is the above a defect which is of immediate danger to persons:</label>
                        <input disabled type="radio" name="radio7" id="box13" style="margin-left: 20px"><label for="box13" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input disabled type="radio" name="radio7" id="box14" style="margin-left: 20px"><label for="box14" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        <br>
                        <label class="lab" style="font-size: 20px; width: auto">Is the above a defect which is not yet but could become a danger to persons:</label>
                        <input disabled type="radio" name="radio8" id="box15" style="margin-left: 20px"><label for="box15" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input disabled type="radio" name="radio8" id="box16" style="margin-left: 20px"><label for="box16" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        <input disabled id="radioYes" class="text2" style="width: 380px" type="text">
                    </div>
                </div>
                <br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">
                            Particulars of any repair, renewal or alteration required to remedy the defect identified above:
                        </label>
                        <textarea disabled id="tx2" class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 500px">
                            particulars of any tests carried out as part of the examination (if none state NONE):
                        </label>
                        <textarea disabled id="tx3" class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                    </div>
                </div>
                <br>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 18px; width: auto">IS THIS EQUIPMENT SAFE TO OPERATE:</label>
                        <input disabled type="radio" name="radio9" id="box17" style="margin-left: 20px"><label for="box17" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input disabled type="radio" name="radio9" id="box18" style="margin-left: 20px"><label for="box18" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
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
                        <input disabled id="datee" class="text2" style="width: 140px" type="date">
                        <input disabled readonly id="datee2" class="text2" style="width: 145px" type="text">
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
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        $('#client').change(function() {
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findAdd')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#address").empty();
                            $("#work").empty();
                            $("#work").append('<option>Select Work Order</option>');
                            $.each(res, function(key,value) {
                                if(key === "add"){
                                    $("#address").val(value.Address);
                                }
                                if(key === "wo"){
                                    $.each(value, function(key1, value1) {
                                        $("#work").append('<option value="' + value1.ID_WO + '">' + value1.ID_WO +
                                            '</option>');
                                    });
                                }
                                document.getElementById('address').disabled = false;
                                document.getElementById('work').disabled = false;
                            });

                        } else {
                            $("#address").empty();
                            $("#work").empty();
                        }
                    }
                });
            } else {
                $("#work").empty();
                $("#address").empty();
            }
        });
        $('#work').change(function (){
            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('generateRep')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            $("#report").empty();
                            $("#report").val(res);

                        } else {
                            $("#report").empty();
                        }
                        document.getElementById('report').disabled = false;
                        document.getElementById('date1').disabled = false;
                        document.getElementById('date2').disabled = false;
                        document.getElementById('id').disabled = false;
                        document.getElementById('box1').disabled = false;
                        document.getElementById('box2').disabled = false;
                        document.getElementById('box3').disabled = false;
                        document.getElementById('box4').disabled = false;
                        document.getElementById('box5').disabled = false;
                        document.getElementById('box6').disabled = false;
                        document.getElementById('box7').disabled = false;
                        document.getElementById('box8').disabled = false;
                        document.getElementById('box9').disabled = false;
                        document.getElementById('box10').disabled = false;
                        document.getElementById('box11').disabled = false;
                        document.getElementById('box12').disabled = false;
                        document.getElementById('box13').disabled = false;
                        document.getElementById('box14').disabled = false;
                        document.getElementById('box15').disabled = false;
                        document.getElementById('box16').disabled = false;
                        document.getElementById('box17').disabled = false;
                        document.getElementById('box18').disabled = false;
                        document.getElementById('tx1').disabled = false;
                        document.getElementById('tx2').disabled = false;
                        document.getElementById('tx3').disabled = false;
                        document.getElementById('drop1').disabled = false;
                        document.getElementById('drop2').disabled = false;
                        document.getElementById('drop3').disabled = false;
                        document.getElementById('datee').disabled = false;
                        document.getElementById('datee2').disabled = false;
                    }
                });
            } else {
                $("#report").empty();
            }
        });
        $('#box15').click(function () {
            document.getElementById('radioYes').disabled = false;
        });
        $('#box16').click(function () {
            document.getElementById('radioYes').disabled = true;
        });
    </script>
@stop

