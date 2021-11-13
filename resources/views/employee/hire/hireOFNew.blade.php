@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1330px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Hire On/Off</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='hireofp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 640px; width: 1320px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select name="client" id="clientname" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Delivery Note:</label>
                        <a style="padding: unset">
                            <select name="dnote" id="dnote" disabled class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </span>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Hire On:</label>
                        <input id="hireon" name="hireon" readonly disabled class="text2" style="width: 400px" type="text">

                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date On:</label>
                        <input name="date" id="date" disabled class="Date text2" style="width: 190px" type="date">
                        <input id="dateOn" disabled readonly class="Date text2" style="width: 195px" type="text">
                    </span>

                        <label class="lab" style="font-size: 20px; width: 130px">Hire Off:</label>
                        <input id="hireoff" name="hireoff" disabled readonly class=" text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date Off:</label>
                        <input id="dateoff" name="dateoff" disabled class=" text2" style="width: 190px" type="date">
                        <input id="dateOff" disabled readonly class=" text2" style="width: 195px" type="text">
                    </span>
                    </div>
                    <div style="margin-left: 500px; margin-bottom: 20px">
                        <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 133px">Hire On:</label> <input id="hireO" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp">
                        <a style="cursor: pointer" onclick="getKey('hireon')">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Date On:</label> <input class="Date text2" style="width: 150px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a--}}
{{--                                style="cursor: pointer" onclick="showTable('table')">Search</a></span> <br>--}}
                        <br>
                        <label class="lab" style="font-size: 20px; width: 133px">Hire Off:</label> <input id="hireF" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                                style="cursor: pointer" onclick="getKey('hireoff')">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Date Off:</label> <input class="Date text2" style="width: 150px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a--}}
{{--                                style="cursor: pointer" onclick="showTable('table')">Search</a></span> <br>--}}
                        <br>
                        <label class="lab" style="font-size: 20px; width: 133px">Delivery Note:</label> <input id="del" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                                style="cursor: pointer" onclick="getKey('delivery')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input id="c" class="text2" style="width: 350px" type="text"> <span style="width: 80px" class="sp"><a
                                style="cursor: pointer" onclick="getKey('client')">Search</a></span>
                        <br>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Delivery Note</th>
                            <th>Hire On</th>
                            <th>Date On</th>
                            <th>Hire Off</th>
                            <th>Date Off</th>
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
                alert("Select a Hire to edit");
            }
            form.action = "{{route('editH')}}";
        };
        function get_action2(form) {
            form.action = "{{route('insertHire')}}";
        };
        $(document).ready(function(){
            $('#clientname').change(function() {

                document.getElementById('dnote').disabled = false;
                var client = $(this).val();
                if (client) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('dynamicHire')}}",
                        data: {client: client},
                        success: function(res) {
                            // console.log("check");
                            if (res) {
                                $("#dnote").empty();
                                $("#dnote").append('<option>Select Delivery Note</option>');
                                $.each(res, function(key, value) {
                                    $("#dnote").append('<option value="' + value.ID_DN + '">' + value.ID_DN +
                                        '</option>');
                                });
                            } else {
                                $("#dnote").empty();
                            }
                        }
                    });
                } else {
                    $("#dnote").empty();
                }
            });
            $('#dnote').change(function (){

                var dnote = $(this).val();
                if (dnote) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('generateHire')}}",
                        data: {dnote: dnote},
                        success: function(res) {
                            if (res) {
                                $("#hireon").empty();
                                $.each(res, function(key, value) {
                                   if (key === "hon"){
                                       document.getElementById('date').disabled = false;
                                       document.getElementById('hireon').disabled = false;
                                       // console.log(value);
                                       $("#hireon").val(value);
                                   }
                                   if(key === "hof"){
                                       $("#hireoff").val(value);
                                       if (value !== ""){
                                           document.getElementById('dateoff').disabled = false;
                                           document.getElementById('hireoff').disabled = false;
                                           document.getElementById('date').disabled = true;
                                       }
                                   }
                                   if (key === "date"){
                                       $("#dateOn").val(value);
                                   }

                                });


                            } else {
                                $("#hireon").empty();
                                $("#hireoff").empty();
                            }
                        }
                    });
                } else {
                    $("#hireon").empty();
                    $("#hireoff").empty();
                }
            });
        });
        function getKey(key){
            showTable('table')
            var searchKey = "";
            if (key === "hireon"){
                searchKey = $("#hireO").val();
            } else if (key === "hireoff"){
                searchKey = $("#hireF").val();
            } else if (key === "delivery") {
                searchKey = $("#del").val();
            }else {
                searchKey = $("#c").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchH')}}",
                data: {quote: searchKey,searchType: key},
                success: function(res) {
                    DeleteRows();
                    if (res) {
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.ID_DN + '</td>'+
                                '<td>' + value.Hire_ON + '</td>'+
                                '<td>' + value.Date_ON + '</td>'+
                                '<td>' + value.Hire_OFF + '</td>'+
                                '<td>' + value.Date_OFF + '</td>'+
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
            $("#dnote").append('<option>' + x + '</option>');
            document.getElementById('dnote').value = check(data[1].innerHTML);
            document.getElementById('hireon').value = check(data[2].innerHTML);
            document.getElementById('dateOn').value = check(data[3].innerHTML);
            document.getElementById('hireoff').value = check(data[4].innerHTML);
            document.getElementById('dateOff').value = check(data[5].innerHTML);
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
            document.getElementById('dnote').disabled = false;
            document.getElementById('hireon').disabled = false;
            document.getElementById('hireoff').disabled = false;
            document.getElementById('dateOff').disabled = false;
            document.getElementById('dateOn').disabled = false;
            document.getElementById('date').disabled = false;
            document.getElementById('dateoff').disabled = false;
        };
    </script>
@stop
