@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
     box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
      margin-left: 400px; z-index: 20; height: 780px; width: 1330px;
       background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Wall Thickness</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='walln';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='wallp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Report No.</label> <input name="repNo" id="repNo" class="text2" style="width: 400px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('delivery')">Search</a>
                    </span>
                        <a id="searchEdit" class="sp" onclick="getKey('repedit')" style="margin-left: 20px; text-decoration: none; cursor: default">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Client:</label>
                        <input name="client" readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Work Order:</label>
                        <input name="work" readonly disabled id="work" class="text2" style="width: 400px" type="text">
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">ITEM:</label>
                        <input name="item" disabled id="item" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Original Thickness:</label>
                        <input name="orgth" disabled id="ot" class="text2" style="width: 400px" type="text" value="">
                        <br>

                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Min Thickness:</label>
                        <input name="mint" disabled id="mint" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Max Thickness:</label>
                        <input name="maxt" disabled id="maxt" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Remark:</label>
                        <textarea name="remark" disabled id="remark" class="text2" style="width: 400px; height: 100px; resize: none"></textarea>
                        <div style="margin-left: 450px">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="deleteF(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="editF(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="insertF(this.form)">Insert</button>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Wall ID</th>
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                        </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>Item</th>
                            <th>Original Thickness</th>
                            <th>Thickness_Min</th>
                            <th>Thickness_Max</th>
                            <th>Remark</th>
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
        function insertF(form) {
            form.action = '{{route('insertWallD')}}'
        }
        function editF(form) {
            if(r === ""){
                alert("Choose an id to edit")
            }
            form.action = '{{route('editWallD')}}'
        }
        function deleteF(form) {
            if(r === ""){
                alert("Choose an id to delete")
            }
            form.action = '{{route('deleteWallD')}}'
        }
        var k = "";
        function getKey(key1) {
            k = key1;
            var searchKey = "";
            searchKey = $("#repNo").val();
            if (searchKey === ""){
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchWallD')}}",
                data: {quote: searchKey, searchType: k},
                success: function(res) {
                    DeleteRows();
                    DeleteRows2();
                    if (res) {
                        $.each(res, function(key,value) {
                            if (k === "delivery"){
                                showTable('table');
                                document.getElementById('table2').style.display = 'none';
                                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.IDWallI + '</td>'+
                                    '<td>' + value.Report_NO + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '</tr>');
                            } else{
                                showTable('table2');
                                document.getElementById('table').style.display = 'none';
                                $("#table2").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.Report_NO + '</td>'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.ITEM + '</td>'+
                                    '<td>' + value.Original_T + '</td>'+
                                    '<td>' + value.Thickness_mini + '</td>'+
                                    '<td>' + value.Thickness_max + '</td>'+
                                    '<td>' + value.Remark + '</td>'+
                                    '</tr>');
                            }
                        });
                    }
                }
            });

        };
        function show(){
            enable();
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if (k !== "delivery"){
                document.getElementById('repNo').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);
                document.getElementById('item').value = check(data[3].innerHTML);
                document.getElementById('ot').value = check(data[4].innerHTML);
                document.getElementById('mint').value = check(data[5].innerHTML);
                document.getElementById('maxt').value = check(data[6].innerHTML);
                document.getElementById('remark').value = check(data[7].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            } else{
                document.getElementById('repNo').value = check(data[1].innerHTML);
                document.getElementById('client').value = check(data[2].innerHTML);
                document.getElementById('work').value = check(data[3].innerHTML);
                document.getElementById('item').value = "";
                document.getElementById('ot').value = "";
                document.getElementById('mint').value = "";
                document.getElementById('maxt').value = "";
                document.getElementById('remark').value = "";

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
            document.getElementById('client').disabled = false;
            document.getElementById('work').disabled = false;
            document.getElementById('item').disabled = false;
            document.getElementById('ot').disabled = false;
            document.getElementById('mint').disabled = false;
            document.getElementById('maxt').disabled = false;
            document.getElementById('remark').disabled = false;
            document.getElementById('searchEdit').style.cursor = 'pointer';
        };
    </script>
@stop
