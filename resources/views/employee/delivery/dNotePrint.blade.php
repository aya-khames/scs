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
                <div onclick="location.href='dnoted';" class="lab tab">
                    <a>Description</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 640px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label>
                        <input id="delivery" class="text2" style="width: 400px" type="text">
                        <a class="sp" style="margin-left: 20px; cursor: pointer" onclick="getKey('delivery')">Search</a><br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                        <input id="work" disabled readonly class="text2" style="width: 400px" type="text">
                        <br>
                        <span>
                        <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                        <input id="client" readonly disabled class="text2" style="width: 400px" type="text">
                    </span>
                    </div>
                    <div style="margin-bottom: 20px; margin-left: 400px; display: inline-block">
                        <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                        <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
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
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
<script>
    var k = "";
    function getKey( key1){
        showTable('table');
        k = key1;
        var searchKey;
        if (k === "delivery"){
            searchKey = $("#delivery").val();
        }
        if (searchKey === ""){
            searchKey = "empty"
        }
        // $.ajax({
        //     type: "GET",
        //     url: "{{route('searchDD')}}",
        //     data: {quote: searchKey, searchType:k},
        //     success: function(res) {
        //         DeleteRows();
        //         if (res) {
        //             $.each(res, function(key,value) {
        //                 toAppend(key, value);
        //             });
        //         }
        //     }
        // });
    };
    function toAppend(key, value){
        if (k === "delivery"){
            showTable('table');
            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                '<td>' + value.ID_DN  + '</td>'+
                '<td>' + value.Name_C + '</td>'+
                '<td>' + value.ID_WO  + '</td>'+
                '</tr>');
        }
    };
    function DeleteRows() {
        var rowCount = table.rows.length;
        for (var i = rowCount - 1; i > 0; i--) {
            table.deleteRow(i);
        }
    };
    function show() {
        enable();
        var rowId =
            event.target.parentNode.id;
        var data = document.getElementById(rowId).querySelectorAll("td");

        document.getElementById('delivery').value = check(data[0].innerHTML);
        document.getElementById('work').value = check(data[1].innerHTML);
        document.getElementById('client').value = check(data[2].innerHTML);

        r = rowId;
    };
    function enable() {
        document.getElementById('work').disabled = false;
        document.getElementById('client').disabled = false;
    };
</script>
@stop
