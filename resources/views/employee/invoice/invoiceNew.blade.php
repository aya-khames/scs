@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Invoice</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='invd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='invp';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='invc';" class="lab tab">
                    <a>Collect</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
            @csrf
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select  id="clientname" name="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Client</option>
                            @foreach($clients as $client)
                                <option value="{{$client->Name_C}}">{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Address:</label>
{{--                        <select id="address" name="Address" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                       <input disabled readonly id="address" name="Address" class="text2" style="width: 400px" type="text">
{{--                        </select>--}}
                            </span>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                    <a style="padding: unset">
                        <select disabled id="work" name="workorder" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Work Order</option>
                        </select>
                    </a>
                    {{--generated--}}
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Invoice:</label> <input disabled readonly id="invoice" name="invoice" class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">REQ NO:</label> <input disabled id="box1" name="reqnumber" class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Currency:</label>
                        <a style="padding: unset">
                            <select disabled name="currency" class="miniDrop2" id="box2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Currency</option>
                                <option>LE</option>
                                <option>USD</option>
                                <option>EUR</option>
                                <option>GBP</option>
                            </select>
                        </a>
                    </span>
                    <label class="lab" style="font-size: 20px; width: 130px">PO No:</label> <input disabled  id="box3" name="po" class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 135px; margin-left: 10px">Date:</label><input disabled  id="box4" name="date" class="text2" style="width: 195px" type="date"><input readonly name="date" class="text2" style="width: 195px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Date:</label> <input disabled id="box5" name="delivery" class="Date text2" style="width: 400px" type="date">
                    <span>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Transportation:</label> <input disabled id="box6" name="transportation" class="text2" style="width: 400px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Collect:</label>
                        <a style="padding: unset">
                            <select disabled id="box7" name="collect" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option selected>NO</option>
                                <option>YES</option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">VAT:</label>
                    <a style="padding: unset">
                        <select disabled id="box8" name="vat" class="miniDrop2" style="width: 85px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option disabled selected></option>
                            <option>With Vat</option>
                            <option>Without Vat</option>
                        </select>
                    </a>
                        <input disabled id="box9" name="percent" class="text2" style="width: 40px" type="text">
                        <label class="lab" style="font-size: 18px; width: auto; margin: 5px">%</label>
                    <span>
                        <label class="lab" style="font-size: 20px; width: 40px; margin-left: 10px">TAX:</label>
                        <a style="padding: unset">
                            <select disabled id="box10" name="tax" class="miniDrop2" style="width: 85px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option disabled selected></option>
                                <option>With Tax</option>
                                <option>Without Tax</option>
                            </select>
                        </a>
                        <input disabled id="box11" name="tpercent" class="text2" style="width: 40px" type="text">
                        <label class="lab" style="font-size: 18px; width: auto; margin: 5px">%</label>
                    </span>
                    <div style="margin-left: 460px">
                        <button class="bttn" onclick="get_action1(this.form)">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                        <button class="bttn" type="submit" onclick="get_action3(this.form)">Delete</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Invoice:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 120px; margin-left: 25px">Date:</label><input class="Date text2" style="width: 150px" type="date"><span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a href="#">Search</a></span>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 120px; margin-left: 20px">Work Order:</label> <input class="text2" style="width: 345px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $('#clientname').change(function() {
            document.getElementById('address').disabled = false;
            document.getElementById('work').disabled = false;
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
                                        // console.log(value1);
                                    });
                                }
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
            document.getElementById('invoice').disabled = false;
            document.getElementById('box1').disabled = false;
            document.getElementById('box2').disabled = false;
            document.getElementById('box3').disabled = false;
            document.getElementById('box4').disabled = false;
            document.getElementById('box5').disabled = false;
            document.getElementById('box6').disabled = false;
            document.getElementById('box7').disabled = false;
            document.getElementById('box8').disabled = false;
            //document.getElementById('box9').disabled = false;
            document.getElementById('box10').disabled = false;
            //document.getElementById('box11').disabled = false;
            //document.getElementById('box12').disabled = false;

            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('generateInvoice')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            $("#invoice").empty();
                            $("#invoice").val(res);

                        } else {
                            $("#invoice").empty();
                        }
                    }
                });
            } else {
                $("#invoice").empty();
            }
        });

        $('#box8').change(function () {
            if (this.value === "With Vat") {
                document.getElementById('box9').disabled = false;
                console.log("success");
            }else {
                document.getElementById('box9').disabled = true;
                console.log("success");
            }
        });

        $('#box10').change(function () {
            if (this.value === "With Tax") {
                document.getElementById('box11').disabled = false;
                console.log("success");
            }else {
                document.getElementById('box11').disabled = true;
                console.log("success");
            }

        });
    </script>
@stop

