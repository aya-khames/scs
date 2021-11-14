@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
     margin-left: 400px; z-index: 20; height: 780px; width: 1330px;
      background-color: rgba(240,248,248,0.57)">
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
                        <a id="searchEdit" onclick="getKey('searchedit')" class="sp" style="margin-left: 20px; text-decoration: none; cursor: default">Search Edit</a>
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
                            <th>Compressor ID</th>
                            <th>Certificate Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Certificate Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>ID Number</th>
                            <th>QTY</th>
                            <th>Description</th>
                            <th>Pressure</th>
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
        var k = "";
        function getKey(key1){
            k = key1;
            var searchKey = "";
            searchKey = $("#certNo").val();
            if (searchKey === ""){
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchCD')}}",
                data: {quote: searchKey, searchType: k},
                success: function(res) {
                    DeleteRows();
                    DeleteRows2();
                    if (res) {
                        $.each(res, function(key,value) {
                            if (k === "search"){
                                showTable('table');
                                document.getElementById('table2').style.display = 'none';
                                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.IDCom + '</td>'+
                                    '<td>' + value.CRET_NO + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '</tr>');
                            } else {
                                showTable('table2');
                                document.getElementById('table').style.display = 'none';
                                $("#table2").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.CRET_NO + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.ID_NUM + '</td>'+
                                    '<td>' + value.QTY + '</td>'+
                                    '<td>' + value.Description + '</td>'+
                                    '<td>' + value.Pressure + '</td>'+
                                    '</tr>');
                            }
                        });
                    }
                }
            });

        }
        function show(){
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if (k === "searchedit"){
                document.getElementById('certNo').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('idNumber').value = check(data[3].innerHTML);
                document.getElementById('qty').value = check(data[4].innerHTML);
                document.getElementById('description').value = check(data[5].innerHTML);
                document.getElementById('press').value = check(data[6].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            } else{
                document.getElementById('certNo').value = check(data[1].innerHTML);
                document.getElementById('client').value = check(data[2].innerHTML);
                document.getElementById('work').value = check(data[3].innerHTML);
                document.getElementById('idNumber').value = "";
                document.getElementById('qty').value = "";
                document.getElementById('description').value = "";
                document.getElementById('press').value = "";
            }
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        function DeleteRows2() {
            var rowCount = table2.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table2.deleteRow(i);
            }
        }
        function enable() {
            document.getElementById('certNo').disabled = false;
            document.getElementById('client').disabled = false;
            document.getElementById('work').disabled = false;
            document.getElementById('idNumber').disabled = false;
            document.getElementById('qty').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('press').disabled = false;
            document.getElementById('searchEdit').style.cursor = 'pointer';
        };
    </script>
@stop
