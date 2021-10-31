@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Wall Thickness</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='walld';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='wallp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>

            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select id="clientname" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                            @foreach($clients as $client)
                                <option>{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Location:</label>
                    <input disabled id="loc" class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <a style="padding: unset">
                        <select disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
{{--                            <option>1111</option>--}}
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Report No.</label>
                    <input disabled readonly id="reportNo" class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px">Report Date:</label>
                    <input disabled id="date1" class="Date text2" style="width: 190px" type="date">
                    <input disabled id="date2" readonly class="Date text2" style="width: 195px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">ID No.</label>
                    <input disabled id="id" class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px">Material:</label>
                    <input disabled id="material" class="text2" style="width: 400px" type="text">
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Details 1:</label>
                    <input disabled id="de1" class="text2" style="width: 400px" type="text" value="OIL SEPARATOR T0ANK">
                    <div style="display: inline-block; height: 100px">
                        <label class="lab" style="font-size: 17px; width: 130px">Name Inspected:</label>
                        <a style="padding: unset">
                            <select disabled id="nameI" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                <option>AMR AHMED</option>
                                <option>AHMED KOTB</option>
                                <option>HASSAN SALAH</option>
                                <option>GASEM ELZOHARY</option>
                                <option>MOHAMED AHMED</option>
                                <option>MAHMOUD MORSY</option>
                                <option>YEHIA MOUSTAFA</option>
                            </select>
                        </a>
                        <br>
                        <label class="lab" style="font-size: 17px; width: 130px"> Name Approved:</label>
                        <a style="padding: unset">
                            <select disabled id="nameA" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                <option>AMR AHMED</option>
                                <option>AHMED KOTB</option>
                                <option>HASSAN SALAH</option>
                                <option>GASEM ELZOHARY</option>
                                <option>MOHAMED AHMED</option>
                                <option>MAHMOUD MORSY</option>
                                <option>YEHIA MOUSTAFA</option>
                            </select>
                        </a>
                    </div>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Details 2:</label>
                    <input disabled id="de2" type="text" class="text2" style="display: inline-block; width: 400px; height: 100px; resize: none">
                    <br>
                    <div style="margin-left: 490px">
                        <button class="bttn">Edit</button><button class="bttn">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Report No.</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Date:</label> <input class="Date text2" style="width: 190px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 5px">To:</label> <input class="Date text2" style="width: 190px" type="date" ></span> <span class="sp"><a
                            href="#">Search</a>
                    </span>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        $('#clientname').change(function() {
            document.getElementById('loc').disabled = false;
            document.getElementById('work').disabled = false;
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findAdd')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#loc").empty();
                            $("#work").empty();
                            $("#work").append('<option>Select Work Order</option>');
                            $.each(res, function(key,value) {
                                if(key === "add"){
                                    $("#loc").val(value.Address);
                                }
                                if(key === "wo"){
                                    $.each(value, function(key1, value1) {
                                        $("#work").append('<option value="' + value1.ID_WO + '">' + value1.ID_WO +
                                            '</option>');
                                        // console.log(value1);
                                    });
                                }
                            });

                        } else {
                            $("#loc").empty();
                            $("#work").empty();
                        }
                    }
                });
            } else {
                $("#work").empty();
                $("#loc").empty();
            }
        });
        $('#work').change(function () {
            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('getCert')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            document.getElementById('reportNo').disabled = false;
                            $("#reportNo").empty();
                            $("#reportNo").val(res);
                            console.log(res);
                        } else {
                            $("#reportNo").empty();
                        }
                    }
                });
            } else {
                $("#reportNo").empty();
            }
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('id').disabled = false;
            document.getElementById('material').disabled = false;
            document.getElementById('de1').disabled = false;
            document.getElementById('de2').disabled = false;
            document.getElementById('nameI').disabled = false;
            document.getElementById('nameA').disabled = false;

        });
    </script>
@stop
