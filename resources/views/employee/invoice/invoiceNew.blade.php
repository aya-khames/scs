@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
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
            <br>
            <div style="height: 635px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px" method="POST">
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
                        <br>
                        <div style="margin-left: 460px">
                            <button id="editIn" class="bttn" type="submit">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                            <button class="bttn" type="submit" onclick="get_action3(this.form)">Delete</button>
                        </div>
                    </div>
                </form>
                <form name="helper" style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <input name="searchType" readonly id="searchType" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 100px">Invoice:</label>
                        <input name="invoice" id="inv" class="text2" style="width: 400px" type="text">
                        <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('invoice')">Search</a></span>
{{--                        <label class="lab" style="font-size: 20px; width: 120px; margin-left: 25px">Date:</label>--}}
{{--                        <input class="Date text2" style="width: 150px" type="date">--}}
{{--                        <span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 10px">To:</label>--}}
{{--                            <input class="Date text2" style="width: 150px" type="date" ></span>--}}
{{--                        <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>--}}
                        <br>
                        <label class="lab" style="font-size: 20px; width: 100px">Client:</label>
                        <input name="client" id="c" class="text2" style="width: 400px" type="text">
                        <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('client')">Search</a></span>
                        <label class="lab" style="font-size: 20px; width: 120px; margin-left: 20px">Work Order:</label>
                        <input name="work" id="work" class="text2" style="width: 345px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('work')">Search</a></span>
                    </div>
                </form>
                <br>
                @if($posts !== "")
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                        <table id="table" style="width: 1190px">
                            <tr style="color: white; background-color: #0b3756; cursor: default">
                                <th>Name</th>
                                <th>Work Order</th>
                                <th>Invoice</th>
                                <th>Invoice Type</th>
                                <th>Address</th>
                                <th>Req No</th>
                                <th>Currency</th>
                                <th>Enquiry </th>
                                <th>Date</th>
                                <th>Delivery Date</th>
                                <th>Transportation</th>
                                <th>VatNumber</th>
                                <th>VatType</th>
                                <th>Vat</th>
                                <th>TaxType</th>
                                <th>Tax</th>
                                <th>VatClient</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr onclick="show()" id="'+ {{$post->_id}}+ '">
                                    <td>{{$post->Name_C}}</td>
                                    <td>{{$post->ID_WO}}</td>
                                    <td>{{$post->ID_IN}}</td>
                                    <td>{{$post->INType}}</td>
                                    <td>{{$post->Address}}</td>
                                    <td>{{$post->REQ_NO}}</td>
                                    <td>{{$post->Currency_IN}}</td>
                                    <td>{{$post->Enquiry}}</td>
                                    <td>{{$post->Date_IN1}}</td>
                                    <td>{{$post->Delivery_Time}}</td>
                                    <td>{{$post->Transportation}}</td>
                                    <td>{{$post->VatNumber}}</td>
                                    <td>{{$post->VatType}}</td>
                                    <td>{{$post->Vat}}</td>
                                    <td>{{$post->TaxType}}</td>
                                    <td>{{$post->Tax}}</td>
                                    <td>{{$post->VatClient}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div>{{$posts->appends(request()->input())->links()}}</div>
                @endif
                </div>
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
            document.getElementById('box10').disabled = false;

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
        function get_action2(form) {
            form.action = "{{route('insertInvoiceN')}}";
        };
        function get_action3(form) {
            if (r === ""){
                alert("choose an invoice to delete")
            }
            form.action = "{{route('deleteInvoiceN')}}";
        };
        function getKey( key){
            document.getElementById('searchType').value = key;
            document.forms["helper"].action= "{{route('searchIn')}}"
            document.forms["helper"].submit();
        }
        var r = "";
        function show() {
            document.getElementById('address').disabled = false;
            document.getElementById('work').disabled = false;
            document.getElementById('invoice').disabled = false;
            document.getElementById('box1').disabled = false;
            document.getElementById('box2').disabled = false;
            document.getElementById('box3').disabled = false;
            document.getElementById('box4').disabled = false;
            document.getElementById('box5').disabled = false;
            document.getElementById('box6').disabled = false;
            document.getElementById('box7').disabled = false;
            document.getElementById('box8').disabled = false;
            document.getElementById('box10').disabled = false;
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('clientname').value = check(data[0].innerHTML);
            var x = check(data[1].innerHTML)
            $("#work").append('<option>' + x + '</option>');
            document.getElementById('work').value = check(data[1].innerHTML);
            document.getElementById('invoice').value = check(data[2].innerHTML);
            document.getElementById('address').value = check(data[4].innerHTML);
            document.getElementById('box1').value = check(data[5].innerHTML);
            document.getElementById('box2').value = check(data[6].innerHTML);
            document.getElementById('box4').value = check(data[8].innerHTML);
            document.getElementById('box5').value = check(data[9].innerHTML);
            document.getElementById('box6').value = check(data[10].innerHTML);
            r = rowId;
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        $('#editIn').click(function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var name = $("#clientname").val();
            var work = $("#work").val();
            var invoice = $("#invoice").val();
            var address = $("#address").val();
            var reqno = $("#box1").val();
            var currency = $("#currency").val();
            var vat = $("#box8").val();
            var date = $("#box4").val();
            var delivery = $("#box5").val();
            var trans = $("#box6").val();
            var tax = $("#box10").val();
            if (r === ""){
                alert("Choose an Invoice to edit");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "{{route('editInvoiceN')}}",
                    data: {_token:_token,
                        work:work,
                        invoice:invoice,
                        address:address,
                        reqno:reqno,
                        name: name,
                        vat: vat,
                        trans: trans,
                        currency: currency,
                        date: date,
                        delivery: delivery,
                        tax: tax,
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

