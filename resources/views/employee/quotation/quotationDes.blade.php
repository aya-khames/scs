@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1240px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Quotation</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='quoten';"  class="lab tab">
                    <a>New</a>
                    </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='quotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 635px; width: 1230px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px"method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label> <input id="quote" name="quotation" class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input id="client" disabled readonly name="client" class="text2" style="width: 400px" type="text"></span>
                        <br>
                        <span class="sp"><a style="margin-left: 150px; cursor: pointer" onclick="getKey('quote')">Search</a>
                        <a onclick="getKey('quoteitem')" id="searchEdit" style="margin-left: 50px">Search Edit</a>
                        <input disabled style="margin-left: 330px; height: 17px; width: 17px" id="check" value="0" type="checkbox"></span>
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 430px">Unit Price:</label><input id="unit" disabled name="unitPrice" class="text2" style="width: 70px; margin-top: 10px" type="number" value="0">
                        <label class="lab" style="font-size: 20px; width: 48px; margin-left: 5px">QTY:</label><input disabled id="check2" name="qty" class="text2" style="width: 70px" type="number" value="0">
                        {{-- it'll appear automatically--}}
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 5px">Total Price:</label><input id="ttl" disabled readonly name="ttlPrice" class="text2" style="width: 70px" type="number" value="0">
                        <br>
                        <textarea id="description" disabled name="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; resize: none"></textarea>
                        <br>
                        <span><label class="lab" style="font-size: 20px; width: 120px; margin-left: 10px">Type:</label>
                        <a style="padding: unset; display: inline-block">
                            <select disabled id="type" name="type" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Type</option>
                                <option>Inspection</option>
                                <option>Supply</option>
                                <option>Hire</option>
                            </select>
                        </a>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button onclick="get_action2(this.form)" class="bttn">Delete</button>
                            <button onclick="get_action3(this.form)" class="bttn">Edit</button>
                            <button onclick="get_action4(this.form)" class="bttn">Insert</button>
                        </div>
                    </span>

                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1160px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1160px">
                        <tr id="head" style="color: white; background-color: #0b3756; cursor: default">
                            <th>Quotation ID</th>
                            <th>Client</th>
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
            if (r === ""){
                alert("choose a quotation to delete")
            }
            form.action = "{{route('deleteQuoteDesc')}}";
        };
        var r = "";
        function get_action3(form) {
            if (r === ""){
                alert("choose a quotation to edit")
            }
            form.action = "{{route('editQuoteDesc')}}";
        };
        function get_action4(form) {
            form.action = "{{route('insertQuoteDesc')}}";
        };
        $('#check').click(function() {
            console.log(this.getAttribute("value"));
            if(this.getAttribute("value") === "0"){
                   document.getElementById('ttl').readOnly = false;
                  this.setAttribute("value", "1");
              }else {
                  document.getElementById('ttl').readOnly = true;
                  this.setAttribute("value", "0");
              }
        });

        function getKey( key1){
            showTable('table');
            var searchKey;
            var searchKeyRed = "";
            if (key1 === "quote"){
                searchKey = $("#quote").val();
            } else if (key1 === "quoteitem"){
                searchKey = $("#client").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchQD')}}",
                data: {quote: searchKey, searchType:key1},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        // console.log(res);
                        $.each(res, function(key,value) {
                            toAppend(key1, key, value);
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });
        }
        function toAppend(key, key1, value){
            if (key === "quote"){
                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                    '<td>' + value.ID_QUO + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '</tr>');
            } else{
                // console.log(key);
                // console.log(value);
                // $("#head").append(
                //     '<th>' + 'Description' + '</th>'+
                //     '<th>' + 'Unit Price' + '</th>'+
                //     '<th>' + 'Qty' + '</th>'+
                //     '<th>' + 'Total Price' + '</th>'+
                //     '<th>' + 'Type' + '</th>'
                // );
                $("#table").append('<tr onclick="show( '+'key'+' )" id="' + value._id + '">'+
                    '<td>' + value.ID_QUO + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.Description + '</td>'+
                    '<td>' + value.Price_QUO + '</td>'+
                    '<td>' + value.QTY + '</td>'+
                    '<td>' + value.Total_Price + '</td>'+
                    '<td>' + value.Type_QUO + '</td>'+
                    '</tr>');
            }
        }
        function show(key) {
            document.getElementById('check').disabled = false;
            document.getElementById('searchEdit').style.cursor = "pointer";
            document.getElementById('client').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('type').disabled = false;
            document.getElementById('ttl').disabled = false;
            document.getElementById('unit').disabled = false;
            document.getElementById('check2').disabled = false;
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if(key === "quote"){
                document.getElementById('description').value = check(data[2].innerHTML);
                document.getElementById('unit').value = check(data[3].innerHTML);
                document.getElementById('check2').value = check(data[4].innerHTML);
                document.getElementById('ttl').value = check(data[5].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;

            }
            document.getElementById('quote').value = check(data[0].innerHTML);
            document.getElementById('client').value = check(data[1].innerHTML);

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
