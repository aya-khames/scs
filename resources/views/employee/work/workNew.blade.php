@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1330px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Work Order</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='workd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='workp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 635px; width: 1320px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <a style="padding: unset">
                            <select id="clientname" name="client" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Client</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->Name_C}}">{{$client->Name_C}}</option>
                                @endforeach
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Quotation:</label>
                        <a style="padding: unset; text-decoration: none">
                            {{--there's an issue--}}
                            <select disabled id="quotation" name="quotation" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Quotation</option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input id="b2" disabled readonly name="workOrder" class="text2" style="width: 400px" type="text" >
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Contact:</label> <input id="contact" disabled readonly name="contperson" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">PO:</label> <input id="b4" disabled name="po" class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Fax No:</label> <input id="b5" disabled name="fax" class="text2" style="width: 400px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Currency:</label> <input id="b6" disabled readonly name="currency" class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Date:</label> <input id="b7" disabled name="date" class="Date text2" style="width: 190px" type="date"> <input id="b8" disabled readonly name="date" class="Date text2" style="width: 195px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Date:</label> <input id="b9" disabled name="delivery" class="Date text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Validity:</label> <input id="b10" disabled name="valedity" class="text2" style="width: 400px" type="text"></span>
                        <label class="lab" style="font-size: 20px; width: 130px">Note:</label>
                        <br>
                        <textarea id="b11" disabled name="note" class="text2" style="width: 400px; height: 50px; margin-left: 140px; scroll-behavior: smooth; display: inline-block; resize: none"></textarea>
                        <div style="margin-left: 360px; display: inline-block">
                            <button type="submit" id="editW" class="bttn">Edit</button>
                            <button type="submit" onclick="get_action3(this.form)" class="bttn">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 120px">Work Order:</label> <input id="workS" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a id="searchW" style="cursor: pointer" onclick="showTable('table')">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 25px">Date:</label><input class="Date text2" style="width: 150px" type="date"><span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>--}}
                        <br>
                        <label class="lab" style="font-size: 20px; width: 120px">Client:</label> <input id="clientS" class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a id="searchC" style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 20px">Quotation:</label> <input id="QS" class="text2" style="width: 345px" type="text"> <span style="width: 80px" class="sp"><a id="searchQ" style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Quotation</th>
                            <th>Work Order</th>
                            <th>Contact Person</th>
                            <th>PO</th>
                            <th>Fax</th>
                            <th>Currency</th>
                            <th>Date</th>
                            <th>Delivery Date</th>
                            <th>Validity</th>
                            <th>Note</th>
                            <th>Case</th>
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
            form.action = "{{route('editWorkNew')}}";
        };
        function get_action3(form) {
            form.action = "{{route('insertWorkNew')}}";
        };
        $('#clientname').change(function() {
            document.getElementById('contact').disabled = false;
            document.getElementById('quotation').disabled = false;

            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findQ')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#quotation").empty();
                            $("#quotation").append('<option>Select a Quotation</option>');
                            $.each(res, function(key, value) {
                                    $("#quotation").append('<option value="' + value.ID_QUO + '">' + value.ID_QUO +
                                        '</option>');
                            });

                        } else {
                            $("#quotation").empty();
                        }
                    }
                });
            } else {

                $("#quotation").empty();
            }
           });
        $('#quotation').change(function() {
            document.getElementById('b2').disabled = false;
            document.getElementById('b6').disabled = false;
            var quotation = $(this).val();
            if (quotation) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findCQ')}}",
                    data: {quotation: quotation},
                    success: function(res) {
                        if (res) {
                            $("#contact").empty();
                            $.each(res, function(key, value) {
                                if (key === "q"){
                                     $("#contact").val(value.C_P) ;
                                     $("#b6").val(value.Currency_QUO) ;
                                }
                                if(key === "wo"){
                                       $("#b2").val(value) ;
                                }
                            });
                        } else {
                            $("#contact").empty();
                        }
                    }
                });
            } else {
                $("#contact").empty();
            }

            document.getElementById('b4').disabled = false;
            document.getElementById('b5').disabled = false;

            document.getElementById('b7').disabled = false;
            document.getElementById('b8').disabled = false;
            document.getElementById('b9').disabled = false;
            document.getElementById('b10').disabled = false;
            document.getElementById('b11').disabled = false;

        });
        function getKey( key){
            var searchKey;
            if (key === "work"){
                searchKey = $("#workS").val();
            } else if (key === "client"){
                searchKey = $("#clientS").val();
            } else {
                searchKey = $("#QS").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            console.log(searchKey);
            $.ajax({
                type: "GET",
                url: "{{route('searchW')}}",
                data: {quote: searchKey, searchType:key},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.ID_QUO + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.C_P + '</td>'+
                                '<td>' + value.P_O + '</td>'+
                                '<td>' + value.Fax_C + '</td>'+
                                '<td>' + value.Currency_WO + '</td>'+
                                '<td>' + value.Date_WO + '</td>'+
                                '<td>' + value.Delivery_Date + '</td>'+
                                '<td>' + value.VALIDITY_WO + '</td>'+
                                '<td>' + value.Note_WO + '</td>'+
                                '<td>' + value.Case_WO + '</td>'+
                                '</tr>');
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });
        }
        var r = "";
        function show() {
            document.getElementById('b11').disabled = false;
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
             var x = check(data[1].innerHTML)
             $("#quotation").append('<option>' + x + '</option>');
            document.getElementById('quotation').value = check(data[1].innerHTML);
            document.getElementById('b2').value = check(data[2].innerHTML);
            document.getElementById('contact').value = check(data[3].innerHTML);
            document.getElementById('b4').value = check(data[4].innerHTML);
            document.getElementById('b5').value = check(data[5].innerHTML);
            document.getElementById('b6').value = check(data[6].innerHTML);
            document.getElementById('b8').value = check(data[7].innerHTML);
            document.getElementById('b9').value = check(data[8].innerHTML);
            document.getElementById('b10').value = check(data[9].innerHTML);
            document.getElementById('b11').value = check(data[10].innerHTML);
            r = rowId;
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        $('#searchW').click(function() {
            showTable('table');
            getKey("work");
        });
        $('#searchC').click(function() {
            showTable('table');
            getKey("client");
        });
        $('#searchQ').click(function() {
            showTable('table');
            getKey("quote");
        });
        $('#editW').click(function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var name = $("#clientname").val();
            var contact = $("#contact").val();
            var quot = $("#quotation").val();
            var work = $("#b2").val();
            var po = $("#b4").val();
            var fax = $("#b5").val();
            var currency = $("#b6").val();
            var date = $("#b7").val();
            var delivery = $("#b9").val();
            var note = $("#b11").val();
            var validity = $("#b10").val();

            if (r === ""){
                alert("choose a Quote to edit");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "{{route('editWorkNew')}}",
                    data: {_token:_token,
                        work:work,
                        po:po,
                        fax:fax,
                        note:note,
                        name: name,
                        contact: contact,
                        quot: quot,
                        currency: currency,
                        date: date,
                        delivery: delivery,
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
