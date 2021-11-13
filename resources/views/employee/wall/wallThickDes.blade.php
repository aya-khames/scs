@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1330px; background-color: rgba(240,248,248,0.57)">
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
                        <a class="sp" onclick="getKey('repedit')" style="margin-left: 20px; text-decoration: none">Search Edit</a>
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
                        <input name="remark" disabled id="remark" type="text" class="text2" style="width: 400px; height: 100px; resize: none">
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
        function getKey(key1) {
            showTable('table');
            var searchKey = "";
            searchKey = $("#repNo").val();
            if (searchKey === ""){
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchWallD')}}",
                data: {quote: searchKey, searchType: key1},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {
                            if (key1 === "delivery"){
                                // var x = key1
                                $("#table").append('<tr onclick="show(' +key1 +')" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.Report_NO + '</td>'+
                                    '</tr>');
                                console.log(key1);

                            }
                            else {
                                $("#table").append('<tr onclick="show(' + key1 + ')" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.ID_WO + '</td>'+
                                    '<td>' + value.Report_NO + '</td>'+
                                    '<td>' + value.ITEM + '</td>'+
                                    '<td>' + value.Original_T + '</td>'+
                                    '<td>' + value.Thickness_mini + '</td>'+
                                    '<td>' + value.Thickness_max + '</td>'+
                                    '<td>' + value.Remark + '</td>'+
                                    '</tr>');
                            }
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });

        };
        function show(key){
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if (key !== "reportNo"){
                document.getElementById('item').value = check(data[3].innerHTML);
                document.getElementById('ot').value = check(data[4].innerHTML);
                document.getElementById('mint').value = check(data[5].innerHTML);
                document.getElementById('maxt').value = check(data[5].innerHTML);
                document.getElementById('remark').value = check(data[6].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }
            document.getElementById('repNo').value = check(data[0].innerHTML);
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
