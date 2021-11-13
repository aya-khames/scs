@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Invoice</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='invn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
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
                        <label class="lab" style="font-size: 20px; width: 130px">Invoice:</label> <input id="invoice" name="invoice" class="text2" style="width: 400px" type="text">
                        <span class="sp"><a style="margin-left: 10px; cursor: pointer" onclick="getKey()">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input id="work" readonly name="work" disabled class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input id="client" readonly name="client" disabled class="text2" style="width: 400px" type="text"></span>
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">

                        <input style="margin-left: 675px; height: 17px; width: 17px" disabled id="check" value="0" type="checkbox">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 430px">Unit Price:</label><input name="price" disabled id="check1" class="text2" style="width: 70px; margin-top: 10px" type="text">
                        <label class="lab" style="font-size: 20px; width: 48px; margin-left: 5px">QTY:</label><input disabled name="qty" id="check2" class="text2" style="width: 70px" type="text">
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 5px">Total Price:</label><input id="ttlprice" name="ttlPrice" disabled readonly class="text2" style="width: 70px" type="text">
                        <br>
                        <textarea id="description" name="description" disabled class="text2" style="width: 400px;margin-left: 145px; height: 150px; resize: none"></textarea>
                        <br>
                        <div style="margin-left: 900px; display: inline-block">
                            <button class="bttn" >Print</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Edit</button>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
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
        $('#check').click(function() {
            console.log(this.getAttribute("value"));
            if(this.getAttribute("value") === "0"){
                document.getElementById('ttlprice').readOnly = false;
                this.setAttribute("value", "1");
            }else {
                document.getElementById('ttlprice').readOnly = true;
                this.setAttribute("value", "0");
            }
        });
        var r = "";
        function get_action2(form) {
            if (r === ""){
                alert("choose an invoice to edit")
            }
            form.action = "{{route('editIND')}}";
        };

        function getKey(){
            showTable('table');
            var searchKey;
            searchKey = $("#invoice").val();
            if (searchKey === ""){
                searchKey = "empty"
            }
            console.log(searchKey);
            $.ajax({
                type: "GET",
                url: "{{route('searchIND')}}",
                data: { quote: searchKey},
                success: function(res) {
                    if (res) {
                        console.log(res);

                        DeleteRows();
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.ID_IN + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.Description + '</td>'+
                                '<td>' + value.Price_IN + '</td>'+
                                '<td>' + value.QTY + '</td>'+
                                '<td>' + value.Total_Price + '</td>'+
                                '<td>' + value.Type_IN + '</td>'+
                                '</tr>');
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });
        }
        function show() {
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('invoice').value = check(data[0].innerHTML);
            document.getElementById('work').value = check(data[1].innerHTML);
            document.getElementById('client').value = check(data[2].innerHTML);
            document.getElementById('description').value = check(data[3].innerHTML);
            document.getElementById('check1').value = check(data[4].innerHTML);
            document.getElementById('check2').value = check(data[5].innerHTML);
            document.getElementById('ttlprice').value = check(data[6].innerHTML);

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
            document.getElementById('work').disabled = false;
            document.getElementById('client').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('check').disabled = false;
            document.getElementById('check1').disabled = false;
            document.getElementById('check2').disabled = false;
            document.getElementById('ttlprice').disabled = false;
        };
    </script>
@stop
