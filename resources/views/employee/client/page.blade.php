@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 600px; z-index: 20; height: 780px; width: 930px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Client</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div   class="lab tabSelected" style="cursor: default">
                    <a>New Client</a>
                </div>
                <div onclick="location.href='addcont';" class="lab tab" style="width: 200px">
                    <a>Add Contact Person</a>
                </div>
            </nav>
            <br>
            <div style="height: 610px; width: 920px; overflow-y: auto">
                <form id="form" style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px" method="POST">
                    @csrf
                    <div style="padding: 15px; border-radius: 5px">
                        <label style="font-size: 20px; width: 120px" class="lab">Name:</label> <input required name="name" id="name" class="text1" type="text" placeholder="Enter the name"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">Tel_1:</label> <input id="tel1" name="tel1" class="text2" type="text" placeholder="Enter phone number"><label style="margin-left: 10px; width: 80px; font-size: 20px" class="lab">Tel_2:</label> <input id="tel2" class="text2" name="tel2" type="text" placeholder="Enter another one"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">Mob_1:</label> <input id="mob1" class="text2" name="mob1" type="text" placeholder="Enter mobile number"><label style="margin-left: 10px; width: 80px; font-size: 20px" class="lab">Mob_2:</label> <input class="text2" name="mob2" type="text" placeholder="Enter another one"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">Fax:</label> <input id="fax" class="text1" name="fax" type="text" placeholder="Enter the fax"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">E-Mail:</label> <input id="mail" class="text1" name="mail" type="text" placeholder="Enter the E-mail"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">Address:</label> <input required id="address" class="text1" name="address" type="text" placeholder="Enter the Address"><br>
                        <label style="font-size: 20px; width: 120px" class="lab">Vat Number:</label> <input id="vat" class="text1" name="vat" type="text" placeholder="Enter the Vat no."><br>

                        <div style="margin-left: 300px; margin-top: 5px" id="far">
                            <button id="edit" type="submit" onclick="get_action1(this.form)" class="bttn">Edit</button>
                            <button id="insert" type="submit" onclick="get_action2(this.form)" class="bttn">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px">
                    @csrf
                    <div style="padding: 15px; border-radius: 5px">
                        <label style="font-size: 20px; width: 120px" class="lab" style="width: 60px">Name</label>
                        <input id="search" name="search" class="text1" style="width: 400px" type="text" placeholder="Enter the name">
                        <button type="submit" id="searchbtn" onclick="showTable('tableDiv')" style="background-color: #0b3756;color: #fff;border-radius: 15px; letter-spacing: 1px;
    border: 2px rgba(255, 255, 255, 0.15); text-align: center;
    box-shadow: 0 0 5px 5px gainsboro; margin-right: 10px; margin-left: 10px; height: 40px; width: 90px">search</button>
                    </div>
                </form>
                <div id="tableDiv" style="margin: 20px; display: none; height: 400px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 860px; overflow-y: auto">
                    <table id="table">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name</th>
                            <th>Address</th>
                            <th>Tel</th>
                            <th>Mobile</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Tel2</th>
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
            form.action = "{{route('edit')}}";
        };
        function get_action2(form) {
            form.action = "{{route('createClient')}}";
        };
        $('#searchbtn').click(function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            showTable('tableDiv');
            var client = $("#search").val();
            if (client === ""){
                client = "empty";
            }
            if (client) {
                $.ajax({
                    type: "POST",
                    url: "{{route('searchClientNew')}}",
                    data: {_token:_token, client: client},
                    success: function(res) {
                        if (res) {
                            DeleteRows();
                            var i = 0;
                            var ID = 'row';
                            $.each(res, function(key,value) {
                                ID += i;
                                $("#table").append('<tr onclick="show()" id="' + ID + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.Address + '</td>'+
                                    '<td>' + value.Tel1 + '</td>'+
                                    '<td>' + value.Mobile1 + '</td>'+
                                    '<td>' + value.Fax_C + '</td>'+
                                    '<td>' + value.E_mail + '</td>'+
                                    '<td>' + value.Tel2 + '</td>'+
                                    '</tr>');
                                ID = 'row';
                                i++;
                            });
                        } else {
                            $("#table").empty();
                        }
                    }
                });
            } else {
                $("#table").empty();
            }
        });
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
        function show() {
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            document.getElementById('name').value = check(data[0].innerHTML);
            document.getElementById('address').value = check(data[1].innerHTML);
            document.getElementById('tel1').value = check(data[2].innerHTML);
            document.getElementById('mob1').value = check(data[3].innerHTML);
            document.getElementById('fax').value = check(data[4].innerHTML);
            document.getElementById('mail').value = check(data[5].innerHTML);
            document.getElementById('tel2').value = check(data[6].innerHTML);
        }

    </script>
@stop
