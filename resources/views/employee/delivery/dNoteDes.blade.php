@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
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
                        <a onclick="getKey('editdel')" class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input name="work" readonly id="work" disabled class="text2" style="width: 400px" type="text">
                        <span> <a class="sp" style="margin-left: 10px; text-decoration: none">Search</a> <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Client:</label> <input name="client" readonly id="client" disabled class="text2" style="width: 400px" type="text"></span>
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
        function getKey( key1){
            showTable('table');
            var searchKey;
            if (key1 === "delivery"){
                searchKey = $("#delivery").val();
            } else if (key1 === "editdel"){
                searchKey = $("#delivery").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchDD')}}",
                data: {quote: searchKey, searchType:key1},
                success: function(res) {
                    if (res) {
                        DeleteRows();
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
            if (key === "delivery"){
                var x = key
                $("#table").append('<tr onclick="show(' + x + ')" id="' + value._id + '">'+
                    '<td>' + value.ID_DN + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.ID_WO + '</td>'+
                '</tr>');
                console.log(key);

            } else{
                $("#table").append('<tr onclick="show(' + x + ')" id="' + value._id + '">'+
                    '<td>' + value.ID_DN + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.ID_WO + '</td>'+
                    '<td>' + value.ID_NUM + '</td>'+
                    '<td>' + value.Description + '</td>'+
                    '<td>' + value.QTY + '</td>'+
                    '</tr>');
            }
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        function show(key) {
            // console.log(key.id)
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if(key !== "delivery") {
                document.getElementById('description').value = check(data[3].innerHTML);
                document.getElementById('qty').value = check(data[4].innerHTML);
                document.getElementById('idNumber').value = check(data[5].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }

            document.getElementById('delivery').value = check(data[0].innerHTML);
            document.getElementById('work').value = check(data[1].innerHTML);

            document.getElementById('client').value = check(data[2].innerHTML);




            r = rowId;
        }

    </script>
@stop
