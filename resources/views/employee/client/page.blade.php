@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 700px; z-index: 20; height: 800px; width: 930px;
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
            <div style="height: 635px; width: 920px; overflow-y: auto">
                <form id="form" style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px" method="POST">
                    @csrf
                    <div style="padding: 15px; border-radius: 5px">
                        <label class="lab">Name:</label> <input required name="name" id="name" class="text1" type="text" placeholder="Enter the name"><br>
                        <label class="lab">Tel_1:</label> <input name="tel1" class="text2" type="text" placeholder="Enter phone number"><label style="margin-left: 10px; width: 80px" class="lab">Tel_2:</label> <input class="text2" name="tel2" type="text" placeholder="Enter another one"><br>
                        <label class="lab">Mob_1:</label> <input class="text2" name="mob1" type="text" placeholder="Enter mobile number"><label style="margin-left: 10px; width: 80px" class="lab">Mob_2:</label> <input class="text2" name="mob2" type="text" placeholder="Enter another one"><br>
                        <label class="lab">Fax:</label> <input class="text1" name="fax" type="text" placeholder="Enter the fax"><br>
                        <label class="lab">E-Mail:</label> <input class="text1" name="mail" type="text" placeholder="Enter the E-mail"><br>
                        <label class="lab">Address:</label> <input required id="address" class="text1" name="address" type="text" placeholder="Enter the Address"><br>
                        <label class="lab">Vat Number:</label> <input class="text1" name="vat" type="text" placeholder="Enter the Vat no."><br>
                        <br>
                        <div style="margin-left: 300px" id="far">
                            <button id="edit" type="submit" onclick="get_action1(this.form)" class="bttn">Edit</button>
                            <button id="insert" type="submit" onclick="get_action2(this.form)" class="bttn">Insert</button>
                        </div>
                    </div>
                </form>
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px">
                    @csrf
                    <div style="padding: 15px; border-radius: 5px">
                        <label class="lab" style="width: 60px">Name</label>
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
            // console.log("successssssss");

            // console.log("successssssss");
            showTable('tableDiv');
            var client = $("#search").val();
            if (client === ""){
                client = "empty";
            }
            // console.log(client);
            if (client) {
                $.ajax({
                    type: "POST",
                    url: "{{route('searchClientNew')}}",
                    data: {_token:_token, client: client},

                    success: function(res) {
                        if (res) {
                            // console.log(res);
                            // document.getElementsByTagName("td").remove();
                            DeleteRows();

                            var i = 0;
                            var ID = 'row';
                            $.each(res, function(key,value) {
                                ID += i;
                                // console.log(value);
                                $("#table").append('<tr id="' + ID + '">'+
                                    '<td>' + value.Name_C + '</td>'+
                                    '<td>' + value.Address + '</td>'+
                                    '<td>' + value.Tel1 + '</td>'+
                                    '<td>' + value.Mobile1 + '</td>'+
                                    '<td>' + value.Fax_C + '</td>'+
                                    '<td>' + value.E_mail + '</td>'+
                                    '<td>' + value.Tel2 + '</td>'+
                                    '</tr>');
                                // console.log(ID);
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
    </script>
@stop
