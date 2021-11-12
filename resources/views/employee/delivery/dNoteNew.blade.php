@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Delivery Note</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='dnoted';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='dnotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 640px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select id="clientname" name="client" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Client</option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <span>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Work Order:</label>
                        <a style="padding: unset">
                            <select id="work" name="wid" disabled class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Work Order</option>
                            </select>
                        </a>
                            <input name="id" readonly id="id" class="text2" style="display: none" type="text">

                    </span>
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label> <input id="dnote" readonly name="dnote" disabled class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Delivery Time:</label>
                        <input name="date" id="date" disabled class="Date text2" style="width: 190px" type="date">
                        <input disabled readonly id="date2" class="Date text2" style="width: 195px" type="text">
                    </span>
                        <label class="lab" style="font-size: 20px; width: 130px">PO No:</label> <input name="po" id="po" disabled class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">REQ NO:</label> <input name="req" id="req" disabled class="text2" style="width: 400px" type="text"></span>
                        <br><br>
                        <div style="margin-left: 490px">
                            <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label>
                        <input id="del" class="text2" style="width: 400px" type="text">
                        <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('delivery')">Search</a></span> <br>

{{--                        <label class="lab" style="font-size: 20px; width: 130px">Date:</label>--}}
{{--                        <input class="Date text2" style="width: 175px" type="date" >--}}
{{--                        <span>--}}
{{--                        <label class="lab" style="font-size: 20px; width: auto; margin: 5px">To:</label>--}}
{{--                        <input class="Date text2" style="width: 170px" type="date">--}}
{{--                    </span> <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span><br>--}}

                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                        <input id="wo" class="text2" style="width: 400px" type="text">
                        <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('work')">Search</a></span> <br>

                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <input id="c" class="text2" style="width: 400px" type="text">
                        <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('client')">Search</a></span> <br>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Work Order</th>
                            <th>Delivery Note</th>
                            <th>Delivery Date</th>
                            <th>PO</th>
                            <th>REQ NO</th>
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
        function get_action1(form) {
            if (r === ""){
                alert("Select a Delivery Note to edit");
            }
            form.action = "{{route('editDN')}}";
        };
        function get_action2(form) {
            form.action = "{{route('insertdnote')}}";
        };
        $(document).ready(function(){
            $('#clientname').change(function() {

                document.getElementById('work').disabled = false;
                var client = $(this).val();
                if (client) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('dynamicDP')}}",
                        data: {client: client},
                        success: function(res) {
                            if (res) {

                                $("#work").empty();
                                $("#work").append('<option>Select Work Order</option>');
                                $.each(res, function(key, value) {
                                    $("#work").append('<option value="' + value.ID_WO + '">' + value.ID_WO +
                                        '</option>');

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
            $('#work').change(function (){
                document.getElementById('dnote').disabled = false;
                document.getElementById('date').disabled = false;
                document.getElementById('date2').disabled = false;
                document.getElementById('po').disabled = false;
                document.getElementById('req').disabled = false;

                var work = $(this).val();
                if (work) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('dnID')}}",
                        data: {work: work},
                        success: function(res) {
                            if (res) {
                                $("#dnote").empty();
                                $("#dnote").val(res);
                            } else {
                                $("#contact").empty();
                            }
                        }
                    });
                } else {

                    $("#contact").empty();
                }
            });
        });
        function getKey(key){
            showTable('table')
            var searchKey = "";
            if (key === "delivery"){
                searchKey = $("#del").val();
            } else if (key === "work"){
                searchKey = $("#wo").val();
            } else {
                searchKey = $("#c").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchDN')}}",
                data: {quote: searchKey,searchType: key},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {

                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.ID_DN + '</td>'+
                                '<td>' + value.Delivery_Date + '</td>'+
                                '<td>' + value.P_O + '</td>'+
                                '<td>' + value.REQ_NO + '</td>'+
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
            document.getElementById('dnote').value = check(data[2].innerHTML);
            document.getElementById('date').value = check(data[3].innerHTML);
            document.getElementById('po').value = check(data[4].innerHTML);
            document.getElementById('req').value = check(data[4].innerHTML);
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
