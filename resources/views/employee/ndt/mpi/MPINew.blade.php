@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
     box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
      margin-left: 400px; z-index: 20; height: 780px; width: 1370px;
       background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">NDT M.P.I</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='mpip';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1360px">
                <form style="width: 1320px; margin: unset" method="POST">
                    @csrf
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
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
                                </select>
                            </a>
                            <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                            <label class="lab" style="font-size: 20px; width: 130px">CERT No.</label>
                            <input id="certNo" name="cert" disabled readonly id="certNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Requisition No.</label>
                            <input name="req" disabled id="reqNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 130px">Date:</label>
                            <input name="date" disabled id="date1" class="Date text2" style="width: 190px" type="date">
                            <input disabled id="date2" readonly class="Date text2" style="width: 195px" type="text">
                            <label name="dateINSP" class="lab" style="font-size: 20px; width: 140px; margin-left: 20px">Date of INSP:</label>
                            <input disabled id="date3" class="Date text2" style="width: 190px" type="date">
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
                            <input name="testno" disabled readonly id="tpn" class="text2" style="width: 400px" type="text" value="BSEN9934-1 : 2002">
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
                            <input id="certificate" class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey()">Search</a></span>
                            <br>
{{--                            <label class="lab" style="font-size: 20px; width: 90px">Date:</label>--}}
{{--                            <input class="Date text2" style="width: 120px" type="date">--}}
{{--                            <label class="lab" style="font-size: 20px; width: auto; margin-left: 8px">To:</label>--}}
{{--                            <input class="Date text2" style="width: 125px" type="date" >--}}
{{--                            <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>--}}
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1280px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1280px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name_C</th>
                            <th>ID_WO</th>
                            <th>CERT_NO</th>
                            <th>REQ_NO</th>
                            <th>DATE_C1</th>
                            <th>DATE_INSP1</th>
                            <th>LOCATION_C</th>
                            <th>Description_C</th>
                            <th>TEST_SPEC</th>
                            <th>SURFACE_CON</th>
                            <th>ACC_STAN</th>
                            <th>MATERIAL_C</th>
                            <th>TEST_PN</th>
                            <th>DYE_PEN</th>
                            <th>INSPECTOR_C</th>
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
            form.action = "{{route('insertMPINew')}}";
        }
        function get_action2(form) {
            if (r == ""){
                alert("choose an id to edit");
            }
            form.action = "{{route('editMPI')}}";
        }
        function getKey(){
            showTable('table')
            var searchKey = $("#certificate").val();
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchMPI')}}",
                data: {quote: searchKey},
                success: function(res) {
                    DeleteRows();
                    if (res) {
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.CERT_NO + '</td>'+
                                '<td>' + value.REQ_NO + '</td>'+
                                '<td>' + value.DATE_C1 + '</td>'+
                                '<td>' + value.DATE_INSP1 + '</td>'+
                                '<td>' + value.LOCATION_C + '</td>'+
                                '<td>' + value.Description_C + '</td>'+
                                '<td>' + value.TEST_SPEC + '</td>'+
                                '<td>' + value.SURFACE_CON + '</td>'+
                                '<td>' + value.ACC_STAN + '</td>'+
                                '<td>' + value.MATERIAL_C + '</td>'+
                                '<td>' + value.TEST_PN + '</td>'+
                                '<td>' + value.DYE_PEN + '</td>'+
                                '<td>' + value.INSPECTOR_C + '</td>'+
                                '</tr>');
                        });
                    }
                }
            });

        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        function show() {
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
            var x = check(data[1].innerHTML)
            $("#work").append('<option>' + x + '</option>');
            document.getElementById('work').value = check(data[1].innerHTML);
            document.getElementById('certNo').value = check(data[2].innerHTML);
            document.getElementById('reqNo').value = check(data[3].innerHTML);
            document.getElementById('date2').value = check(data[4].innerHTML);
            document.getElementById('date4').value = check(data[5].innerHTML);
            document.getElementById('location').value = check(data[6].innerHTML);
            document.getElementById('disc').value = check(data[7].innerHTML);
            document.getElementById('ts').value = check(data[8].innerHTML);
            document.getElementById('sc').value = check(data[9].innerHTML);
            document.getElementById('as').value = check(data[10].innerHTML);
            document.getElementById('material').value = check(data[11].innerHTML);
            document.getElementById('tpn').value = check(data[12].innerHTML);
            document.getElementById('dp').value = check(data[13].innerHTML);
            document.getElementById('ins').value = check(data[14].innerHTML);
            document.getElementById('id').value = r;
            r = rowId;
        }
        function enable(){
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
            document.getElementById('ts').disabled = false;
            document.getElementById('as').disabled = false;
            document.getElementById('material').disabled = false;
            document.getElementById('tpn').disabled = false;
        };
    </script>
@stop
