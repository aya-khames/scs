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
            <div style="height: 635px; width: 1230px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px" method="POST" id="qform">
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
                            <select required id="contactId" name="contact" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option></option>
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
                                <option>With VAT</option>
                                <option>Without VAT</option>
                            </select>
                        </a>
                        <input id="vatOn" class="text2" type="text" disabled style="width: 70px"> %
                        <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Validity:</label> <input disabled id="val" name="validity" class="text2" style="width: 400px" type="text"></span>
                        <br><br>
                        <div style="margin-left: 490px">
                            <button class="bttn" id="editQuote" type="submit">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 100px">Quotation:</label> <input id="quote" class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp">
                            <a style="cursor: pointer" id="searchQuote">Search</a></span> <br>
                        <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input id="c" class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp">
                            <a style="cursor: pointer" id="searchClient" onclick="showTable('table')">Search</a></span> <br>
{{--                        <label class="lab" style="font-size: 20px; width: 100px">Date:</label> <input id="datefrom" class="Date text2" style="width: 300px" type="date" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input id="dateto" class="Date text2" style="width: 300px" type="date" ></span> <span class="sp">--}}
{{--                            <a style="cursor: pointer" id="searchDate" onclick="showTable('table')">Search</a></span><br>--}}
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1160px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Client</th>
                            <th>Contact</th>
                            <th>Quotation</th>
                            <th>Enquiry</th>
                            <th>Currency</th>
                            <th>Date</th>
                            <th>Delivery Time</th>
                            <th>Transportation</th>
                            <th>Vat</th>
                            <th>Validity</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
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
                            $("#contactId").empty();
                            $("#contactId").append('<option>Select Contact Person</option>');
                            $.each(res, function(key, value) {
                                if (key === "cp"){
                                    $.each(value, function(key1, value1) {
                                        $("#contactId").append('<option value="' + value1.C_P + '">' + value1.C_P +
                                            '</option>');
                                    });
                                }
                                if(key === "quotId"){
                                    console.log(value);
                                    $("#qid").val(value);
                                }

                            });
                            document.getElementById('contactId').disabled = false;
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
                            $("#contactId").empty();
                        }
                    }
                });
            } else {
                $("#contactId").empty();
            }
        });
        $('#vat').change(function () {
            if (this.value === "With Vat.") {
                document.getElementById('vatOn').disabled = false;
            }else {
                document.getElementById('vatOn').disabled = true;
            }

        });
        function getKey( key){
            var searchKey;
            var searchKeyRed = "";
            if (key === "quote"){
                searchKey = $("#quote").val();
                console.log(searchKey);
            } else if (key === "client"){
                searchKey = $("#c").val();
            } else {
                searchKey = $("#datefrom").val();
                searchKeyRed = $("#dateto").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchQ')}}",
                data: {quote: searchKey, date: searchKeyRed, searchType:key},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.C_P + '</td>'+
                                '<td>' + value.ID_QUO + '</td>'+
                                '<td>' + value.Enquiry + '</td>'+
                                '<td>' + value.Currency_QUO + '</td>'+
                                '<td>' + value.Date_QUO1 + '</td>'+
                                '<td>' + value.Delivery_Time + '</td>'+
                                '<td>' + value.Transportation_QUO + '</td>'+
                                '<td>' + value.VatType + '</td>'+
                                '<td>' + value.VALIDITY_QUO + '</td>'+
                                '</tr>');
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });
        }
        $('#searchQuote').click(function() {
            showTable('table');
            getKey("quote");
        });
        $('#searchClient').click(function(){
            showTable('table');
            getKey("client");
        });
        $('#searchDate').click(function(){
            showTable('table');
            getKey("date");
        });
        var r = "";
        function show() {
            document.getElementById('contactId').disabled = false;
            document.getElementById('qid').disabled = false;
            document.getElementById('enq').disabled = false;
            document.getElementById('curr').disabled = false;
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('dt').disabled = false;
            document.getElementById('trans').disabled = false;
            document.getElementById('vat').disabled = false;
            document.getElementById('val').disabled = false;
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
            var x = check(data[1].innerHTML)
            $("#contactId").append('<option>' + x + '</option>');
            document.getElementById('contactId').value = check(data[1].innerHTML);
            document.getElementById('qid').value = check(data[2].innerHTML);
            document.getElementById('enq').value = check(data[3].innerHTML);
            document.getElementById('curr').value = check(data[4].innerHTML);
            document.getElementById('date2').value = check(data[5].innerHTML);
            document.getElementById('dt').value = check(data[6].innerHTML);
            document.getElementById('trans').value = check(data[7].innerHTML);
            document.getElementById('vat').value = check(data[8].innerHTML);
            document.getElementById('val').value = check(data[9].innerHTML);

            r = rowId;
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        $('#editQuote').click(function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            // var data = $("#qform").serialize();
            var name = $("#clientname").val();
            var contact = $("#contactId").val();
            var quot = $("#qid").val();
            var enquiry = $("#enq").val();
            var currency = $("#curr").val();
            var date = $("#date1").val();
            var delivery = $("#dt").val();
            var transportation = $("#trans").val();
            var vat = $("#vat").val();
            var validity = $("#val").val();

            if (r === ""){
                alert("choose a Quote to edit");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "{{route('editQuote')}}",
                    data: {_token:_token,
                        name: name,
                        contact: contact,
                        quot: quot,
                        enquiry: enquiry,
                        currency: currency,
                        date: date,
                        delivery: delivery,
                        transportation: transportation,
                        vat: vat,
                        validity: validity,
                        id:r
                    },
                    success: function() {
                         location.reload()
                    }
                });
            }
        });
    </script>
@stop
