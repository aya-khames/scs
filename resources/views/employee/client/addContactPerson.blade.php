@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 600px; z-index: 20; height: 700px; width: 930px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Client</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='page';" class="lab tab">
                    <a>New Client</a>
                </div>
                <div class="lab tabSelected" style="width: 200px; cursor: default">
                    <a>Add Contact Person</a>
                </div>
            </nav>
            <br><br>
            <div style="height: 500px; width: 920px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px" method="POST">
                    @csrf
                    <div style="padding: 15px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <br><br>
                        <label class="lab" style="width: 200px">Name:</label> <input required id="name" name="nameCp" class="text1" style="width: 400px" type="text" placeholder="Enter the name">
{{--                        <input id="oldname" name="oldname" class="text1" style="display: none" type="text" >--}}
                        <span class="sp"><a id="searchClient" style="cursor: pointer">Search</a></span> <span class="sp"><a style="cursor: pointer">Search Contact</a></span> <br>
                        <label class="lab" style="width: 200px">Contact Person:</label> <input required id="cp" name="cp" class="text1" style="width: 400px" type="text" placeholder="Enter the contact">
{{--                        <input id="oldcp" name="oldcp" class="text1" style="display: none" type="text" >--}}
                        <span class="sp"><a style="cursor: pointer" id="searchCp">Search</a></span> <br>
                        <br>
                    </div>
                    <div style="margin-left: 280px">
                        <button class="bttn" type="submit" onclick="get_action1(this.form)">Delete</button>
                        <button class="bttn" type="submit" id="edit">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action3(this.form)">Insert</button>
                    </div>
                    <br>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 850px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Contact Person</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function get_action1(form) {
            form.action = "{{route('deleteCont')}}";
        }
        function get_action3(form) {
            form.action = "{{route('contactPerson')}}";
        }
        $('#searchClient').click(function() {
            showTable('table');
            var client = $("#name").val();
            if (client === ""){
                client = "empty";
            }
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('searchCP')}}",
                    data: {client: client, searchType:"name"},
                    success: function(res) {
                        if (res) {
                            DeleteRows();
                            $.each(res, function(key,value) {
                                $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.C_P + '</td>'+
                                    '</tr>');
                            });
                        } else {
                            DeleteRows();
                        }
                    }
                });
            } else {
                DeleteRows();
            }
        });
        $('#searchCp').click(function() {
            showTable('table');
            var client = $("#cp").val();
            if (client === ""){
                client = "empty";
            }
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('searchCP')}}",
                    data: {client: client, searchType:"Cp"},
                    success: function(res) {
                        if (res) {
                            DeleteRows();
                            $.each(res, function(key,value) {
                                $("#table").append('<tr class="edit" onclick="show()" id="' + value._id + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.C_P + '</td>'+
                                    '</tr>');
                            });
                        } else {
                            DeleteRows();
                        }
                    }
                });
            } else {
                DeleteRows();
            }
        });
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        var r = "";
        function show() {
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('name').value = check(data[0].innerHTML);
            document.getElementById('cp').value = check(data[1].innerHTML);
            document.getElementById('oldname').value = check(data[0].innerHTML);
            document.getElementById('oldcp').value = check(data[1].innerHTML);
            r = rowId;
        }
        $('#edit').click(function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var client = $("#name").val();
            var cp = $('#cp').val();
            if (r === ""){
                alert("choose a contact to edit");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "{{route('editClient')}}",
                    data: {_token:_token, client: client, cp: cp, id:r},
                    success: function() {
                        location.reload()
                    }
                });
            }
        });
    </script>
@stop
