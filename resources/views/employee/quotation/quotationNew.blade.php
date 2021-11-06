@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1240px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Quotation</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='quoted';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='quotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div  style="height: 635px; width: 1230px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select required id="clientname" name="client" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Client</option>
                                @foreach($clients as $client)
                                    <option>{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Contact:</label>
                        <a style="padding: unset">
                            <select required id="contact" name="contact" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{--                            <option value="" disabled selected>Contact</option>--}}
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label> <input disabled readonly name="quot" id="qid" class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Enquiry:</label> <input required disabled name="enquiry" id="enq" class="text2" style="width: 400px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Currency:</label>
                        <a style="padding: unset">
                            <select required disabled id="curr" name="currency" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Currency</option>
                                <option >LE</option>
                                <option >USD</option>
                                <option >EUR</option>
                                <option >GBP</option>
                            </select>
                        </a>
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date:</label> <input required disabled id="date1" name="date" class="text2" style="width: 195px" type="date"><input disabled readonly id="date2" class="text2" style="width: 195px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Time:</label> <input required disabled id="dt" name="delivery" class="text2" style="width: 400px" >
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Transportation:</label> <input id="trans" required disabled name="transportation" class="text2" style="width: 400px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">VAT:</label>
                        <a style="padding: unset">
                            <select disabled id="vat" name="vat" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 300px">
                                <option disabled selected>...</option>
                                <option>With Vat.</option>
                                <option>Without Vat.</option>
                            </select>
                        </a>
                        <input id="vatOn" class="text2" type="text" disabled style="width: 70px"> %
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Validity:</label> <input disabled id="val" name="validity" class="text2" style="width: 400px" type="text"></span>
                        <br><br>
                        <div style="margin-left: 490px">
                            <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 100px">Quotation:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                                href="#" onclick="showTable('table')">Search</a></span> <br>
                        <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                                href="#" onclick="showTable('table')">Search</a></span> <br>
                        <label class="lab" style="font-size: 20px; width: 100px">Date:</label> <input class="Date text2" style="width: 300px" type="date" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input class="Date text2" style="width: 300px" type="date" ></span> <span class="sp"><a
                                href="#" onclick="showTable('table')">Search</a></span><br>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px; overflow-x: auto">
                    <table id="table" style="display: none; width: 1160px">
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
        function get_action1(form) {
            form.action = "{{route('editQuote')}}";
        }
        function get_action2(form) {
            console.log("check");
            form.action = "{{route('insertQuote')}}";
        }
        $('#clientname').change(function() {
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findCP')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#contact").empty();
                            $("#contact").append('<option>Select Contact Person</option>');
                            $.each(res, function(key, value) {
                                if (key === "cp"){
                                    $.each(value, function(key1, value1) {
                                        $("#contact").append('<option value="' + value1.C_P + '">' + value1.C_P +
                                            '</option>');
                                    });
                                }
                                if(key === "quotId"){
                                    console.log(value);
                                    $("#qid").val(value);
                                }

                            });
                            document.getElementById('contact').disabled = false;
                            document.getElementById('qid').disabled = false;
                            document.getElementById('enq').disabled = false;
                            document.getElementById('curr').disabled = false;
                            document.getElementById('date1').disabled = false;
                            document.getElementById('date2').disabled = false;
                            document.getElementById('dt').disabled = false;
                            document.getElementById('trans').disabled = false;
                            document.getElementById('vat').disabled = false;
                            document.getElementById('val').disabled = false;
                        } else {
                            $("#contact").empty();
                        }
                    }
                });
            } else {
                $("#contact").empty();
            }
        });
        $('#vat').change(function () {
            if (this.value === "With Vat.") {
                document.getElementById('vatOn').disabled = false;
            }else {
                document.getElementById('vatOn').disabled = true;
            }

        });
    </script>
@stop
