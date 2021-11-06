@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1370px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">NDT D.P.I</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='dpip';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1350px">
                <form style="width: 1320px; margin: unset; background-color: rgba(240,248,248,0.05)" method="POST">
                    @csrf
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; border-radius: 5px">
                            <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                            <a style="padding: unset">
                                <select id="clientname" name="client" class="miniDrop2" id="client" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    @foreach($clients as $client)
                                        <option>{{$client->Name_C}}</option>
                                    @endforeach
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Work Order:</label>
                            <a style="padding: unset">
                                <select id="work" name="work" disabled class="miniDrop2" id="work" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
{{--                                    <option>111</option>--}}
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 130px">CERT No.</label>
                            <input name="cert" disabled readonly id="certNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Requisition No.</label>
                            <input name="req" disabled id="reqNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 130px">Date:</label>
                            <input name="date" disabled id="date1" class="Date text2" style="width: 190px" type="date">
                            <input disabled id="date2" readonly class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Date of INSP:</label>
                            <input name="dateINSP"  disabled id="date3" class="Date text2" style="width: 190px" type="date">
                            <input disabled id="date4" readonly class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 20px; width: 130px">Location:</label>
                            <input name="location" disabled id="location" class="text2" style="width: 400px" type="text">
                        </div>
                    </div>

                    <div style="display: inline-block; margin: 0 0 0 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); height: 310px">
                        <div style="margin: 15px">
                            <label class="lab" style="font-size: 20px; width: auto">100% MPI was carried out on critical area of:</label>
                            <br>
                            <textarea name="description" disabled id="disc" class="text2" style="width: 500px; height: 200px; resize: none" type="text"></textarea>
                        </div>
                    </div>
                    <div style="display: inline-block; width: 700px; margin: 0 10px 0 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                        <div style="margin: 30px">
                            <label class="lab" style="font-size: 19px; width: 180px">Surface Condition:</label>
                            <a style="padding: unset">
                                <select name="surface" disabled class="miniDrop2" id="sc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AS CLEANED</option>
                                    <option>AS WELDED</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 19px; width: 180px">Test Specification:</label>
                            <input name="testSpec" disabled readonly id="ts" class=" text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 18px; width: 180px">Acceptance Standards:</label>
                            <input name="accept" disabled readonly id="as" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 180px"> Material:</label>
                            <input name="material" disabled id="material" class=" text2" style="width: 400px" type="text" value="CARBON STEEL">
                            <label class="lab" style="font-size: 19px; width: 180px">Test Procedure No.</label>
                            <input  name="testno" disabled readonly id="tpn" class="text2" style="width: 400px" type="text" value="BSEN9934-1 : 2002">
                        </div>
                    </div>
                    <br>
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: 140px"> DYE Penetrant:</label>
                            <input name="dye" disabled id="dp" class=" text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 100px; margin-left: 30px">Inspector:</label>
                            <input name="inspector" disabled id="ins" class="text2" style="width: 400px" type="text">
                        </div>
                    </div>

                    <div style="margin-left: 550px">
                        <button class="bttn" type="submit" onclick="get_action2(this.form)" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action1(this.form)" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                    </div>
                </form>
                <form style="width: 1320px; margin: unset; background-color: rgba(240,248,248,0.05)">
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                        <div style="padding: 20px; border-radius: 5px">
                            <label class="lab" style="font-size: 18px; width: 90px">CERT No:</label>
                            <input class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                            <br>
                            <label class="lab" style="font-size: 20px; width: 90px">Date:</label>
                            <input class="Date text2" style="width: 120px" type="date">
                            <label class="lab" style="font-size: 20px; width: auto; margin-left: 8px">To:</label>
                            <input class="Date text2" style="width: 125px" type="date" >
                            <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1280px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1280px">
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
@section('scripts')
    <script>
        $('#clientname').change(function() {
            document.getElementById('work').disabled = false;
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findAdd')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#work").empty();
                            $("#work").append('<option>Select Work Order</option>');
                            $.each(res, function(key,value) {
                                if(key === "wo"){
                                    $.each(value, function(key1, value1) {
                                        $("#work").append('<option value="' + value1.ID_WO + '">' + value1.ID_WO +
                                            '</option>');
                                    });
                                }
                            });

                        } else {
                            $("#work").empty();
                        }
                    }
                });
            } else {
                $("#work").empty();
            }
        });

        $('#work').change(function () {
            document.getElementById('work').disabled = false;
            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('getCert')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            document.getElementById('certNo').disabled = false;
                            $("#certNo").empty();
                            $("#certNo").val(res);
                            console.log(res);
                        } else {
                            $("#certNo").empty();
                        }
                    }
                });
            } else {
                $("#certNo").empty();
            }
            document.getElementById('reqNo').disabled = false;
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('date3').disabled = false;
            document.getElementById('date4').disabled = false;
            document.getElementById('location').disabled = false;
            document.getElementById('disc').disabled = false;
            document.getElementById('sc').disabled = false;
            document.getElementById('dp').disabled = false;
            document.getElementById('ins').disabled = false;
        });
        $('#sc').change(function () {
            document.getElementById('ts').disabled = false;
            document.getElementById('as').disabled = false;
            document.getElementById('material').disabled = false;
            document.getElementById('tpn').disabled = false;
            if(this.value === "AS CLEANED"){
                document.getElementById('ts').value = "API";
                document.getElementById('as').value = "API8A+8B";
            }else {
                document.getElementById('ts').value = "ASME V";
                document.getElementById('as').value = "ASME V111";
            }
        });
        function get_action1(form) {
            form.action = "{{route('insertDPINew')}}";
        }
        function get_action2(form) {

        }
    </script>
@stop
