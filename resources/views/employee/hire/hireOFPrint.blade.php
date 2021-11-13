@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1300px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Hire On/Off</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='hireofn';" class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="height: 640px; width: 1290px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Hire On:</label>
                        <input id="hireOn" class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 10px; margin-right: 10px;cursor: pointer" onclick="getKey('hireOn')">Search</a>
                        <label class="lab" style="font-size: 20px; width: 80px">Hire Off:</label>
                        <input id="hireOff" class="text2" style="width: 400px" type="text"> <a class="sp" style="margin-left: 10px;cursor: pointer" onclick="getKey('hireOff')">Search</a><br>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Delivery Note:</label>
                        <input id="dNote" disabled readonly class="text2" style="width: 400px" type="text">
                        <span>
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 80px">Client:</label>
                        <input id="client" disabled readonly class="text2" style="width: 400px" type="text">
                    </span>
                        <div style="margin-left: 910px; display: inline-block">
                            <button class="bttn" style="width: 200px">Print with logo</button>
                            <br>
                            <button class="bttn" style="width: 200px">Print without logo</button>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Hire On</th>
                            <th>Delivery Note</th>
                            <th>Client</th>
                        </tr>
                    </table>
                    <table id="table2" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Hire Off</th>
                            <th>Delivery Note</th>
                            <th>Client</th>
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
        k = key1;
        var searchKey;
        if (k === "hireOn"){
            searchKey = $("#hireOn").val();
        }else if (k === "hireOff"){
            searchKey = $("#hireOff").val();
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
        //         DeleteRows2();
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
            document.getElementById('table2').style.display = 'none';
            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                '<td>' + value.ID_DN  + '</td>'+
                '<td>' + value.Name_C + '</td>'+
                '<td>' + value.ID_WO  + '</td>'+
                '</tr>');
        }else{
            showTable('table2');
            document.getElementById('table').style.display = 'none';
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
        if (k === "hireOn"){
            document.getElementById('hireOn').value = check(data[0].innerHTML);
        }else {
            document.getElementById('hireOff').value = check(data[0].innerHTML);
        }
        document.getElementById('dNote').value = check(data[1].innerHTML);
        document.getElementById('client').value = check(data[2].innerHTML);

        r = rowId;
    };
    function enable() {
        document.getElementById('dNote').disabled = false;
        document.getElementById('client').disabled = false;
    };
</script>
@stop
