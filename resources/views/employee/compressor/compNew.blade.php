@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1330px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Compressor</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='compd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='compp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 170px">Client:</label>
                        <a style="padding: unset">
                            <select required id="clientname" name="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 120px; margin-left: 30px">Work Order:</label>
                        <a style="padding: unset">
                            <select name="work" disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">

                        <label class="lab" style="font-size: 20px; width: 170px">Certificate No:</label>
                        <input name="cerno" disabled readonly id="certNo" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 120px; margin-left: 30px">Report date:</label>
                        <input name="repdate" disabled id="date1" class="Date text2" style="width: 190px" type="date">
                        <input disabled readonly id="date2" class="Date text2" style="width: 195px" type="text">

                        <label class="lab" style="font-size: 18px; width: 170px">Date of next thorough examination:</label>
                        <input name="dateNTE" disabled id="date3" class="Date text2" style="width: 190px" type="date">
                        <input disabled readonly id="date4" class="Date text2" style="width: 195px; display: inline-block" type="text">
                        <div style="margin-left: 160px; display: inline-block">
                            <button type="submit" onclick="get_action1(this.form)" class="bttn">Edit</button>
                            <button type="submit" onclick="get_action2(this.form)" class="bttn">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 150px">Certificate No.</label>
                        <input id="cer" class="text2" style="width: 400px" type="text"><span style="width: 80px; margin-left: 10px" class="sp"><a style="cursor: pointer" onclick="getKey()">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Date:</label>--}}
{{--                        <input class="Date text2" style="width: 160px" type="date"><span>--}}
{{--                        <label class="lab" style="font-size: 20px; width: auto; margin-left: 5px">To:</label>--}}
{{--                        <input class="Date text2" style="width: 160px" type="date" ></span> <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>--}}
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Work Order</th>
                            <th>Cert. No</th>
                            <th>Date Com</th>
                            <th>Date NTE</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        var r = "";
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
                    success: function (res) {
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
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('date3').disabled = false;
            document.getElementById('date4').disabled = false;
        });
        function get_action1(form) {
            if (r == ""){
                alert("choose an id to edit");
            }
            form.action = "{{route('editComp')}}";
        }
        function get_action2(form) {
            form.action = "{{route('insertComp')}}";
        }
        function getKey(){
            showTable('table')
            var searchKey = $("#cer").val();
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchComp')}}",
                data: {quote: searchKey},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {

                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.CRET_NO + '</td>'+
                                '<td>' + value.Date_Com + '</td>'+
                                '<td>' + value.Date_NTE + '</td>'+
                                '</tr>');
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });

        }
        function show() {
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
            var x = check(data[1].innerHTML)
            $("#work").append('<option>' + x + '</option>');
            document.getElementById('work').value = check(data[1].innerHTML);
            document.getElementById('certNo').value = check(data[2].innerHTML);
            document.getElementById('date2').value = check(data[3].innerHTML);
            document.getElementById('date4').value = check(data[4].innerHTML);
            document.getElementById('id').value = r;
            r = rowId;
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }

    </script>
@stop
