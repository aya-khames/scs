@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 30px; font-weight: bold">Test_MPI & Visual_MPI</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='tmvmn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='tmvmp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1280px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Report No.</label> <input id="repNo" name="repNo" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('search')">Search</a>
                    </span>
                        <a id="searchEdit" onclick="getKey('searchedit')" class="sp" style="margin-left: 20px; text-decoration: none; cursor: default">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label> <input name="work" readonly disabled id="work" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">Client:</label> <input name="client" readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px">Proof load:</label> <input name="pl" disabled id="pl" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">QTY:</label> <input disabled name="qty" id="qty" class="text2" style="width: 400px" type="text">
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 17px; width: 140px">Safe working load:</label> <input name="safe" disabled id="safe" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">ID No.</label> <input disabled name="idNumber" id="idNumber" class="text2" style="width: 400px" type="number">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea disabled name="description" id="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="deleteTM(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="editTM(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="insertTM(this.form)">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                        </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1190px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>ID Number</th>
                            <th>QTY</th>
                            <th>Description</th>
                            <th>Safe Working Load</th>
                            <th>Proof Load</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function insertTM(form) {
            form.action = '{{route('insertTMD')}}'
        }
        var r = "";
        function editTM(form) {
            if(r === ""){
                alert("Choose an id to edit");
            }
            form.action = '{{route('editTMD')}}'
        }
        function deleteTM(form) {
            if(r === ""){
                alert("Choose an id to delete")
            }
            form.action = '{{route('deleteTMD')}}'
        }
        var k = "";
        function getKey(key1){
            k = key1;
            var searchKey = "";
            searchKey = $("#repNo").val();
            if (searchKey === ""){
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchTMD')}}",
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
                                    '<td>' + value.Report_num + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '</tr>');
                            } else {
                                showTable('table2');
                                document.getElementById('table').style.display = 'none';
                                $("#table2").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.Report_num + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.ID_NUM + '</td>'+
                                    '<td>' + value.QTY + '</td>'+
                                    '<td>' + value.Description + '</td>'+
                                    '<td>' + value.Safe_WL + '</td>'+
                                    '<td>' + value.Proof_load + '</td>'+
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
                document.getElementById('repNo').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('idNumber').value = check(data[3].innerHTML);
                document.getElementById('qty').value = check(data[4].innerHTML);
                document.getElementById('description').value = check(data[5].innerHTML);
                document.getElementById('safe').value = check(data[6].innerHTML);
                document.getElementById('pl').value = check(data[7].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            } else{
                document.getElementById('repNo').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('idNumber').value = "";
                document.getElementById('qty').value = "";
                document.getElementById('description').value = "";
                document.getElementById('pl').value = "";
                document.getElementById('safe').value = "";
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
            document.getElementById('work').disabled = false;
            document.getElementById('client').disabled = false;
            document.getElementById('pl').disabled = false;
            document.getElementById('qty').disabled = false;
            document.getElementById('safe').disabled = false;
            document.getElementById('idNumber').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('searchEdit').style.cursor = 'pointer';
        };
    </script>

@stop

