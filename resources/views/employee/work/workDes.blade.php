@extends('layouts.employeepage')
@section('content_1')

<div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1330px;
    background-color: rgba(240,248,248,0.57)">
    <fieldset>
        <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Work Order</legend>
        <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
            <div onclick="location.href='workn';"  class="lab tab">
                <a>New</a>
            </div>
            <div class="lab tabSelected" style="cursor: default">
                <a>Description</a>
            </div>
            <div onclick="location.href='workp';" class="lab tab">
                <a>Print</a>
            </div>
        </nav>
        <br>
        <div style="height: 635px; width: 1320px; overflow-y: auto">
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px"method="POST">
                @csrf
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Work order:</label> <input id="work" name="work" class="text2" style="width: 400px" type="text">
                    <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('work')">Search</a>
                    </span>
                    <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                    <a id="searchEdit" onclick="getKey('searchedit')" class="sp" style="margin-left: 20px;cursor: default; text-decoration: none">Search Edit</a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label> <input id="quote" disabled name="quotation" class="text2" style="width: 400px" type="text">
                    <span> <a id="search" onclick="getKey('quote')"class="sp" style="margin-left: 10px;cursor: default; text-decoration: none">Search</a> <label class="lab" style="font-size: 20px; width: 60px; margin-left: 20px">Client:</label> <input id="client" disabled name="client" class="text2" style="width: 400px" type="text"></span>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                    <label class="lab" style="font-size: 20px; width: 60px; margin-left: 510px">QTY:</label><input id="qty" disabled name="qty" class="text2" style="width: 135px; margin-top: 10px" type="text">
                    <label class="lab" style="font-size: 20px; width: 110px; margin-left: 5px">ID Number:</label><input id="idno" name="idN" class="text2" style="width: 135px" type="number">
                    <br>
                    <textarea id="description" disabled name="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                    <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button class="bttn">Print</button>
                            <button type="submit" onclick="get_action2(this.form)" class="bttn">Delete</button>
                            <button type="submit" onclick="get_action3(this.form)" class="bttn">Edit</button>
                            <button type="submit" onclick="get_action4(this.form)" class="bttn">Insert</button>
                        </div>
                    </span>
                </div>
            </form>
            <br>
            <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                <table id="table" style="display: none; width: 1250px">
                    <tr style="color: white; background-color: #0b3756; cursor: default">
                        <th>Work Order</th>
                        <th>Client</th>
                        <th>Quotation</th>
                    </tr>
                </table>
                <table id="table2" style="display: none; width: 1250px">
                    <tr style="color: white; background-color: #0b3756; cursor: default">
                        <th>Work Order</th>
                        <th>Client</th>
                        <th>ID Number</th>
                        <th>Description</th>
                        <th>QTY</th>
                    </tr>
                </table>
                <table id="table3" style="display: none; width: 1250px">
                    <tr style="color: white; background-color: #0b3756; cursor: default">
                        <th>Quotation</th>
                        <th>Client</th>
                        <th>Description</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>Total Price</th>
                        <th>Type</th>
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
        form.action = "{{route('deleteWorkDes')}}";
    };
    function get_action3(form) {
        if (r === ""){
            alert("choose a quotation to edit")
        }
        form.action = "{{route('editWorkDes')}}";
    };
    function get_action4(form) {

        form.action = "{{route('insertWorkDes')}}";
    };
    var k = "";
    function getKey( key1){
        k = key1;
        var searchKey;
        if (key1 === "quote"){
            searchKey = $("#client").val();
            console.log(searchKey);
        } else {
            searchKey = $("#work").val();
        }
        if (searchKey === ""){
            searchKey = "empty"
        }
        $.ajax({
            type: "GET",
            url: "{{route('searchWD')}}",
            data: { quote: searchKey, searchType:key1},
            success: function(res) {
                if (k === "quote"){
                    console.log(res);
                }
                DeleteRows();
                DeleteRows2();
                DeleteRows3();
                if (res) {
                    $.each(res, function(key,value) {
                        toAppend(key, value);
                    });
                }
            }
        });
    }
    function toAppend(key, value){
        if (k === "work"){
                document.getElementById('searchEdit').style.cursor = 'pointer';
                document.getElementById('search').style.cursor = 'pointer';
                document.getElementById('table2').style.display = 'none';
                document.getElementById('table3').style.display = 'none';
                showTable('table');
                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                    '<td>' + value.ID_WO + '</td>'+
                    '<td>' + value.Name_C + '</td>'+
                    '<td>' + value.ID_QUO + '</td>'+
                    '</tr>');

        } else if(k === "searchedit"){
                document.getElementById('table3').style.display = 'none';
                document.getElementById('table').style.display = 'none';
                showTable('table2');
                $("#table2").append('<tr onclick="show()" id="' + value._id + '">' +
                    '<td>' + value.ID_WO + '</td>' +
                    // '<td>' + value.ID_QUO + '</td>'+
                    '<td>' + value.Name_C + '</td>' +
                    '<td>' + value.ID_NUM + '</td>' +
                    '<td>' + value.Description + '</td>' +
                    '<td>' + value.QTY + '</td>' +
                    // '<td>' + value.Type_QUO + '</td>'+
                    '</tr>');
        } else {
            var arr = value;
            // arr = value
            // if (key === "t"){
            //     arr.push(value.ID_QUO);
            //     console.log()
            // }
            // if(key === "t"){
            //     arr.push(value.Name_C);
            //     arr.push(value.Description);
            //     arr.push(value.QTY)
            //     arr.push(value.Price_QUO)
            //     arr.push(value.Total_Price)
            //     arr.push(value.Type_QUO)
            //
            // }
            document.getElementById('table2').style.display = 'none';
            document.getElementById('table').style.display = 'none';
            showTable('table3');
            $("#table3").append('<tr onclick="show()" id="' + arr[1]._id + '">'+
                // '<td>' + value.ID_WO + '</td>'+
                '<td>' + arr[0].ID_QUO + '</td>'+
                '<td>' + arr[1].Name_C  + '</td>'+
                '<td>' + arr[1].Description  + '</td>'+
                '<td>' + arr[1].QTY  + '</td>'+
                '<td>' + arr[1].Price_QUO  + '</td>'+
                '<td>' + arr[1].Total_Price  + '</td>'+
                '<td>' + arr[1].Type_QUO  + '</td>'+
                '</tr>');
        }
    }
    function show() {
        var rowId =
            event.target.parentNode.id;
        var data = document.getElementById(rowId).querySelectorAll("td");
        if(k !== "work"){
            document.getElementById('description').value = check(data[3].innerHTML);
            document.getElementById('qty').value = check(data[4].innerHTML);
            document.getElementById('idno').value = check(data[5].innerHTML);


        }
        if(k === "work"){
            document.getElementById('work').value = check(data[0].innerHTML);
            document.getElementById('client').value = check(data[1].innerHTML);
            document.getElementById('quote').value = check(data[2].innerHTML);
            document.getElementById('description').value = "";
            document.getElementById('qty').value = "";
            document.getElementById('idno').value = "";
        }else if (k === "searchedit"){
            document.getElementById('work').value = check(data[0].innerHTML);
            document.getElementById('client').value = check(data[1].innerHTML);
            document.getElementById('idno').value = check(data[2].innerHTML);
            document.getElementById('description').value = check(data[3].innerHTML);
            document.getElementById('qty').value = check(data[4].innerHTML);
            document.getElementById('quote').value = "";
            r = rowId;
            document.getElementById('id').value = r;
        }else{
            document.getElementById('quote').value = check(data[0].innerHTML);
            document.getElementById('client').value = check(data[1].innerHTML);
            document.getElementById('idno').value = "";
            document.getElementById('description').value = check(data[2].innerHTML);
            document.getElementById('qty').value = check(data[3].innerHTML);
            r = rowId;
            document.getElementById('id').value = r;
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
    function DeleteRows3() {
        var rowCount = table3.rows.length;
        for (var i = rowCount - 1; i > 0; i--) {
            table3.deleteRow(i);
        }
    }

</script>
@stop

