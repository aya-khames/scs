@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">CDN</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset; height: 47px" class="navbar navbar-expand-lg navbar-light bg-white">
            </nav>
            <br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 90px">Client:</label>
                    <a style="padding: unset">
                        <select id="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Select Client</option>
                            @foreach($clients as $client)
                                <option>{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 20px">Work Order:</label>
                    <a style="padding: unset">
                        <select disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Select Work Order</option>
                        </select>
                    </a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 90px">Contact:</label>
{{--                    <input disabled readonly id="cont" class="text2" style="width: 400px" type="text">--}}
                    <a style="padding: unset">
                        <select disabled id="cont" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Contact Person</option>

                        </select>

                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 20px">Date:</label>
                    <input disabled id="date1" class="text2" style="width: 190px" type="date">
                    <input disabled readonly id="date2" class="text2" style="width: 195px" type="text">
                    <br>
                    <label class="lab" style="font-size: 20px; width: 90px">Note:</label>
                    <br>
                    <textarea id="note" disabled name="note" class="text2" style="width: 400px; height: 50px; margin-left: 100px; scroll-behavior: smooth; display: inline-block; resize: none"></textarea>
                    <div style="margin-left: 870px; display: inline-block">
                        <button class="bttn" style="width: 200px">Print with logo</button>
                        <br>
                        <button class="bttn" style="width: 200px">Print without logo</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>

        $('#client').change(function () {
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
                            document.getElementById('work').disabled = false;
                            document.getElementById('cont').disabled = false;
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
            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('getCP')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            document.getElementById('date1').disabled = false;
                            document.getElementById('date2').disabled = false;
                            document.getElementById('note').disabled = false;
                            $.each(res, function(key, value) {
                                    $("#cont").append('<option value="' + value.C_P + '">' + value.C_P +
                                        '</option>');
                            });
                        } else {
                            $("#cont").empty();
                        }
                    }
                });
            } else {
                $("#cont").empty();
            }
        });
    </script>
@stop
