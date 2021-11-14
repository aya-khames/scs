@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
     box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
      margin-left: 400px; z-index: 20; height: 780px; width: 1330px;
       background-color: rgba(240,248,248,0.57)">
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
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select id="clientname" required name="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Location:</label>
                        <input name="location" disabled id="loc" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                        <a style="padding: unset">
                            <select name="work" disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Report No.</label>
                        <input name="repno" disabled readonly id="reportNo" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Report Date:</label>
                        <input name="repdate" disabled id="date1" class="Date text2" style="width: 190px" type="date">
                        <input disabled id="date2" readonly class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">ID No.</label>
                        <input name="idno" disabled id="ID" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Material:</label>
                        <input name="material" disabled id="material" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Details 1:</label>
                        <input name="det1" disabled id="de1" class="text2" style="width: 400px" type="text" value="OIL SEPARATOR T0ANK">
                        <div style="display: inline-block; height: 100px">
                            <label class="lab" style="font-size: 17px; width: 130px">Name Inspected:</label>
                            <a style="padding: unset">
                                <select name="nameInspect" disabled id="nameI" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <select name="nameApp" disabled id="nameA" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <textarea name="det2" disabled id="de2" class="text2" style="display: inline-block; width: 400px; height: 100px; resize: none"></textarea>
                        <br>
                        <div style="margin-left: 490px">
                            <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 100px">Report No.</label> <input id="rep" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                                style="cursor: pointer" onclick="getKey()">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Date:</label> <input class="Date text2" style="width: 190px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 5px">To:</label> <input class="Date text2" style="width: 190px" type="date" ></span> <span class="sp"><a--}}
{{--                                style="cursor: pointer" onclick="showTable('table')">Search</a>--}}
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Location</th>
                            <th>Work Order</th>
                            <th>Report NO</th>
                            <th>Date</th>
                            <th>ID_No</th>
                            <th>Material</th>
                            <th>Details1</th>
                            <th>Details2</th>
                            <th>Name Inspected</th>
                            <th>Name Approved</th>
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
            document.getElementById('ID').disabled = false;
            document.getElementById('material').disabled = false;
            document.getElementById('de1').disabled = false;
            document.getElementById('de2').disabled = false;
            document.getElementById('nameI').disabled = false;
            document.getElementById('nameA').disabled = false;

        });
        var r = "";
        function get_action1(form) {
            if (r === ""){
                alert("Select to edit");
            }
            form.action = "{{route('editWall')}}";
        }
        function get_action2(form) {
            form.action = "{{route('insertWallN')}}";
        }
        function getKey(){
            showTable('table')
            var searchKey = $("#rep").val();
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchWall')}}",
                data: {quote: searchKey},
                success: function(res) {
                    DeleteRows();
                    if (res) {
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.Location + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.Report_NO + '</td>'+
                                '<td>' + value.Date_Wall + '</td>'+
                                '<td>' + value.ID_No + '</td>'+
                                '<td>' + value.Material + '</td>'+
                                '<td>' + value.Details1 + '</td>'+
                                '<td>' + value.Details2 + '</td>'+
                                '<td>' + value.Name_Inspected + '</td>'+
                                '<td>' + value.Name_Approved + '</td>'+
                                '</tr>');
                        });
                    }
                }
            });

        };
        function show() {
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
            var x = check(data[1].innerHTML)
            $("#work").append('<option>' + x + '</option>');
            document.getElementById('loc').value = check(data[1].innerHTML);
            document.getElementById('work').value = check(data[2].innerHTML);
            document.getElementById('reportNo').value = check(data[3].innerHTML);
            document.getElementById('date2').value = check(data[4].innerHTML);
            document.getElementById('ID').value = check(data[5].innerHTML);
            document.getElementById('material').value = check(data[6].innerHTML);
            document.getElementById('de1').value = check(data[7].innerHTML);
            document.getElementById('de2').value = check(data[8].innerHTML);
            document.getElementById('nameI').value = check(data[9].innerHTML);
            document.getElementById('nameA').value = check(data[10].innerHTML);
            r = rowId;
            document.getElementById('id').value = r;
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        function enable() {
            document.getElementById('loc').disabled = false;
            document.getElementById('work').disabled = false;
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('ID').disabled = false;
            document.getElementById('material').disabled = false;
            document.getElementById('de1').disabled = false;
            document.getElementById('de2').disabled = false;
            document.getElementById('nameI').disabled = false;
            document.getElementById('nameA').disabled = false;
        };
    </script>
@stop
