@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Delivery Note</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='dnoten';" class="lab tab">
                    <a>New</a>
                    </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='dnotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 640px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label> <input id="delivery" name="delivery" class="text2" style="width: 400px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('delivery')">Search</a>
                    </span>
                        <a id="searchEdit" onclick="getKey('editdel')" class="sp" style="margin-left: 20px; text-decoration: none; cursor: default">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input name="work" readonly id="work" disabled class="text2" style="width: 400px" type="text">
                        <span> <a onclick="getKey('work')" id="search" class="sp" style="margin-left: 10px; text-decoration: none; cursor: default">Search</a>
                            <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Client:</label>
                            <input name="client" readonly id="client" disabled class="text2" style="width: 400px" type="text">
                        </span>
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <label class="lab" style="font-size: 20px; width: 60px; margin-left: 510px">QTY:</label><input name="qty" readonly id="qty" disabled class="text2" style="width: 135px; margin-top: 10px" type="text">
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 5px">ID Number:</label><input name="idno" readonly id="idNumber" disabled class="text2" style="width: 135px" type="number">
                        <br>
                        <textarea readonly id="description" name="description" disabled class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="get_action4(this.form)">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Delivery Note</th>
                            <th>Client</th>
                            <th>Work Order</th>
                        </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1190px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Delivery Note</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>ID Number</th>
                            <th>Description</th>
                            <th>QTY</th>
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
        function get_action2(form) {
            if (r === ""){
                alert("choose a quotation to delete")
            }
            form.action = "{{route('deleteDDes')}}";
        };
        function get_action4(form) {
            form.action = "{{route('insertDDes')}}";
        };
        var k = "";
        function getKey( key1){
            k = key1;
            var searchKey;
            if (k === "delivery" || k === "editdel"){
                searchKey = $("#delivery").val();
            } else {
                searchKey = $("#work").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchDD')}}",
                data: {quote: searchKey, searchType:k},
                success: function(res) {
                    DeleteRows();
                    DeleteRows2();
                    if (res) {
                        $.each(res, function(key,value) {
                            toAppend(key, value);
                        });
                    }
                }
            });
        };
        function toAppend(key, value){
            if (k === "delivery"){
                showTable('table');
                document.getElementById('table2').style.display = 'none';
                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                    '<td>' + value.ID_DN + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.ID_WO + '</td>'+
                '</tr>');
            }else{
                showTable('table2');
                document.getElementById('table').style.display = 'none';
                $("#table2").append('<tr onclick="show()" id="' + value._id + '">'+
                    '<td>' + value.ID_DN + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.ID_WO + '</td>'+
                    '<td>' + value.ID_NUM + '</td>'+
                    '<td>' + value.Description + '</td>'+
                    '<td>' + value.QTY + '</td>'+
                    '</tr>');
            }
        };
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        };
        function DeleteRows2() {
            var rowCount = table2.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table2.deleteRow(i);
            }
        };
        function show() {
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if(k !== "delivery") {
                document.getElementById('delivery').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('idNumber').value = check(data[3].innerHTML);
                document.getElementById('description').value = check(data[4].innerHTML);
                document.getElementById('qty').value = check(data[5].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }else{
                document.getElementById('delivery').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('idNumber').value = "";
                document.getElementById('description').value = "";
                document.getElementById('qty').value = "";
            }
            r = rowId;
        };
        function enable() {
            document.getElementById('work').disabled = false;
            document.getElementById('client').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('qty').disabled = false;
            document.getElementById('idNumber').disabled = false;
            document.getElementById('searchEdit').style.cursor = 'pointer';
            document.getElementById('search').style.cursor = 'pointer';
        };
    </script>
@stop
