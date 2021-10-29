@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
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
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                @csrf
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select name="client" id="clientname" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                            @foreach($clients as $client)
                                <option>{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Delivery Note:</label>
                        <a style="padding: unset">
                            <select name="dnote" id="dnote" disabled class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </span>
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
                        <input disabled readonly class=" text2" style="width: 195px" type="text">
                    </span>
                </div>
                <div style="margin-left: 500px; margin-bottom: 20px">
                    <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                    <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 133px">Hire On:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp">
                        <a href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Date On:</label> <input class="Date text2" style="width: 150px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 133px">Hire Off:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Date Off:</label> <input class="Date text2" style="width: 150px" type="date" ><span><label class="lab" style="font-size: 20px; width: auto; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 133px">Delivery Note:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input class="text2" style="width: 350px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span>
                    <br>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function get_action1(form) {
            form.action = "{{route('edit')}}";
        };
        function get_action2(form) {
            form.action = "{{route('createClient')}}";
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
    </script>
@stop
