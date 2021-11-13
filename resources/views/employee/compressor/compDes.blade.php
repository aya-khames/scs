@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1330px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Compressor</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='compn';" class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='compp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">CERT No.</label>
                        <input name="certNo" id="certNo" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('search')">Search</a>
                    </span>
                        <a onclick="getKey('searchedit')" class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label>
                        <input name="work" readonly disabled id="work" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">Client:</label>
                        <input name="client" readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">ID Number:</label>
                        <input name="idNumber" disabled id="idNumber" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">QTY:</label>
                        <input name="qty" disabled id="qty" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Pressure:</label>
                        <input name="press" disabled id="press" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea name="description" disabled id="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="deleteC(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="editC(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="insertC(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
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
        function insertC(form) {
            form.action = '{{route('insertCD')}}'
        }
        function editC(form) {
            if(r === ""){
                alert("Choose an id to edit")
            }
            form.action = '{{route('editCD')}}'
        }
        function deleteC(form) {
            if(r === ""){
                alert("Choose an id to delete")
            }
            form.action = '{{route('deleteCD')}}'
        }
        function getKey(key1){
            showTable('table');
            var searchKey = "";
            searchKey = $("#certNo").val();
            if (searchKey === ""){
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchCD')}}",
                data: {quote: searchKey, searchType: key1},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {
                            if (key1 === "search"){
                                $("#table").append('<tr onclick="show(' +key1 +')" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.CRET_NO + '</td>'+
                                    '</tr>');
                            }
                            else {
                                $("#table").append('<tr onclick="show(' + key1 + ')" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.CRET_NO + '</td>'+
                                    '<td>' + value.ID_NUM + '</td>'+
                                    '<td>' + value.QTY + '</td>'+
                                    '<td>' + value.Description + '</td>'+
                                    '<td>' + value.Pressure + '</td>'+
                                    '</tr>');
                            }
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });

        }
        function show(key){
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if (key === "searchedit"){
                document.getElementById('idNumber').value = check(data[3].innerHTML);
                document.getElementById('qty').value = check(data[4].innerHTML);
                document.getElementById('description').value = check(data[5].innerHTML);
                document.getElementById('press').value = check(data[6].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }
            document.getElementById('certNo').value = check(data[0].innerHTML);
            document.getElementById('client').value = check(data[1].innerHTML);
            document.getElementById('work').value = check(data[2].innerHTML);
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
    </script>
@stop
