@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
     box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
      margin-left: 400px; z-index: 20; height: 780px; width: 1300px;
       background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Unsafe</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='unsafen';" class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='unsafep';"class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='unsafes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <div style="height: 620px; width: 1290px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1220px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 165px">Report No.</label> <input id="repNo" name="repNo" class="text2" style="margin-left:0; width: 400px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('search')">Search</a>
                    </span>
                        <a id="searchEdit" onclick="getKey('searchedit')" class="sp" style="margin-left: 20px; text-decoration: none; cursor: default">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 165px">Work order:</label> <input readonly name="work" disabled id="work" class="text2" style="margin-left:0; width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input name="client" readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 165px">Safe working load:</label>
                        <input name="safewl" disabled id="safe" class="text2" style="width: 400px; margin-left: 0" type="text">
                        <br>
                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                        <label class="lab" style="font-size: 20px; width: 165px">Date of manufacture if known:</label>
                        <input name="datem" disabled id="date1" class="text2" style="width: 190px; margin-left: 0" type="date">
                        <input disabled readonly id="date2" class="text2" style="width: 190px" type="text">

                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 20px">Date of last thorough examination:</label>
                        <input name="datele" disabled id="date3" class="text2" style="width: 190px" type="date">
                        <input disabled readonly id="date4" class="text2" style="width: 190px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea id="description" name="description" disabled id="txt" class="text2" style="width: 400px;margin-left: 165px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="deleteUSD(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="editUSD(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="insertUSD(this.form)">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1220px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1220px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                        </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1220px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>Description</th>
                            <th>SWL</th>
                            <th>Date MK</th>
                            <th>Date LTE</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function insertUSD(form) {
            form.action = '{{route('insertUSD')}}'
        }
        var r = "";
        function editUSD(form) {
            if(r === ""){
                alert("Choose an id to edit");
            }
            form.action = '{{route('editUSD')}}'
        }
        function deleteUSD(form) {
            if(r === ""){
                alert("Choose an id to delete")
            }
            form.action = '{{route('deleteUSD')}}'
        }
        var k = "";
        function getKey(key1) {
            k = key1;
            var searchKey = "";
            searchKey = $("#repNo").val();
            if (searchKey === "") {
                searchKey = "empty";
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchUSD')}}",
                data: {quote: searchKey, searchType: key1},
                success: function (res) {
                    DeleteRows();
                    DeleteRows2();
                    if (res) {
                        $.each(res, function (key, value) {
                            if (k === "search") {
                                showTable('table');
                                document.getElementById('table2').style.display = 'none';
                                $("#table").append('<tr onclick="show()" id="' + value._id + '">' +
                                    '<td>' + value.Report_num + '</td>' +
                                    '<td>' + value.Name_C + '</td>' +
                                    '<td>' + value.ID_WO + '</td>' +
                                    '</tr>');
                            } else {
                                showTable('table2');
                                document.getElementById('table').style.display = 'none';
                                $("#table2").append('<tr onclick="show()" id="' + value._id + '">' +
                                    '<td>' + value.Report_num + '</td>' +
                                    '<td>' + value.Name_C + '</td>' +
                                    '<td>' + value.ID_WO + '</td>' +
                                    '<td>' + value.Description + '</td>' +
                                    '<td>' + value.Safe_WL + '</td>' +
                                    '<td>' + value.Date_of_MK + '</td>' +
                                    '<td>' + value.Date_of_LTE + '</td>' +
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
                document.getElementById('description').value = check(data[3].innerHTML);
                document.getElementById('safe').value = check(data[4].innerHTML);
                document.getElementById('date2').value = check(data[5].innerHTML);
                document.getElementById('date4').value = check(data[6].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }else {
                document.getElementById('repNo').value = check(data[0].innerHTML);
                document.getElementById('client').value = check(data[1].innerHTML);
                document.getElementById('work').value = check(data[2].innerHTML);

                document.getElementById('description').value = "";
                document.getElementById('safe').value = "";
                document.getElementById('date2').value = "";
                document.getElementById('date4').value = "";
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
            document.getElementById('safe').disabled = false;
            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('date3').disabled = false;
            document.getElementById('date4').disabled = false;
            document.getElementById('description').disabled = false;
            document.getElementById('searchEdit').style.cursor = 'pointer';
        };
    </script>

@stop
