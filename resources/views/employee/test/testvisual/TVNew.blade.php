@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1370px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Test & Visual</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div   class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='tvd';"class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='tvp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; width: 1355px; height: 600px; overflow-y: auto">
                <form style="margin: 5px; width: 1320px" method="POST">
                    @csrf
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: 160px">Client:</label>
                            <a style="padding: unset">
                                <select id="clientname" name="client" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    @foreach($clients as $client)
                                        <option value="{{$client->Name_C}}">{{$client->Name_C}}</option>
                                    @endforeach
                                </select>
                            </a>
                            <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Address:</label>
                            <input name="address" disabled readonly id="address" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 160px">Work Order:</label>
                            <a style="padding: unset">
                                <select name="work" disabled id="work" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
{{--                                    <option>111</option>--}}
                                </select>
                            </a>
                            <input name="id" readonly id="id" class="text2" style="display: none" type="text">
                            <label class="lab" style="font-size: 20px; width: 170px; margin-left: 20px">Report No.</label>
                            <input name="report" disabled readonly id="reportNo" class="text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 20px; width: 160px">Report Date:</label>
                            <input name="date" disabled id="date1" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date2" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of thorough examination:</label>
                            <input name="dateTE" disabled id="date3" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date4" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 160px">Date of manufacture if known:</label>
                            <input name="dateMIK" disabled id="date5" class="Date text2" style="width: 190px" type="date">
                            <input readonly disabled id="date6" class="Date text2" style="width: 195px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 20px">Date of next thorough examination:</label>
                            <a style="padding: unset">
                                <select name="dateNTE" disabled id="dropDate" style="width: 190px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>6 Months</option>
                                    <option>1 Year</option>
                                </select>
                            </a>
                            <input disabled id="dateTxt" class="Date text2" style="width: 195px" type="text">
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: auto">Examination Type:</label>
                            <input name="extype" disabled type="radio" name="radio1" id="box1" style="margin-left: 20px"><label for="box1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Test Examination</label>
                            <input name="extype" disabled type="radio" name="radio1" id="box2" style="margin-left: 20px"><label for="box2" style="color: #0b3756; font-size: 17px; margin-left: 5px">Visual</label>
                            <label class="lab" style="font-size: 18px; width: auto; margin-left: 80px">IS THIS EQUIPMENT SAFE TO OPERATE?</label>
                            <input name="issafe" disabled type="radio" name="radio2" id="box3" style="margin-left: 20px"><label for="box3" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input name="issafe" disabled type="radio" name="radio2" id="box4" style="margin-left: 20px"><label for="box4" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: auto">Choose Unit or Sling:</label>
                            <a style="padding: unset">
                                <select name="unit" disabled id="choose" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>Unit</option>
                                    <option>Sling</option>
                                </select>
                            </a>
                        </div>
                    </div>
                    <label id="label" style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">Unit</label>
                    <div style="margin: 0 20px 20px 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 20px; width: 130px">TESTED BY:</label>
                            <input name="testedby" disabled id="tb" class="Date text2" style="width: 400px" type="text">
                            <label class="lab" style="font-size: 18px; width: 170px; margin-left: 40px">CERTIFICATE NO.</label>
                            <input name="cerno" disabled id="certNo" class="Date text2" style="width: 400px" type="text">
                            <br>
                            <label class="lab" style="font-size: 20px; width: 130px">TEST DATE:</label>
                            <input name="testdate" disabled id="date7" class="Date text2" style="width: 190px" type="date">
                            <input disabled id="date8" class="Date text2" style="width: 195px" type="text">
                        </div>
                    </div>
                    <br>
                    <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 280px">Name of person making this report:</label>
                            <a style="padding: unset">
                                <select name="npmr" disabled id="drop1" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                            <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name of person authenticating this report:</label>
                            <a style="padding: unset">
                                <select name="npar" disabled id="drop2" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                            <br>
                            <label class="lab" style="font-size: 18px; width: 280px">Latest date by which next thorough examination must be carried out:</label>
                            <input name="LNT" disabled readonly id="datee" class="text2" style="width: 300px" type="text">
                            <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name and address of employer of persons making and authenticating this report:</label>
                            <a style="padding: unset">
                                <select name="nae" disabled id="drop3" style="width: 300px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <option value="" disabled selected></option>
                                    <option>AMR AHMED</option>
                                    <option>MOHAMED AHMED</option>
                                    <option>AHMED QUTOB</option>
                                    <option>GASEM ELZOHARY</option>
                                    <option>HASSAN MOHAMED</option>
                                    <option>AHMED RADY</option>
                                    <option>SHEHAB MOHAMED</option>
                                    <option>OMAR MOHAMED</option>
                                    <option>MOHAMED GAFER</option>
                                </select>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div style="margin-left: 530px">
                        <button class="bttn" type="submit" onclick="get_action2(this.form)" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action1(this.form)" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                    </div>
                </form>
                <form style="margin: 5px; width: 1320px">
                    <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                        <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 90px">Report No:</label>
                            <input id="repno" class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('repno')">Search</a></span>
{{--                            <label class="lab" style="font-size: 18px; width: 110px; margin-left: 30px">Report Date:</label>--}}
{{--                            <input class="Date text2" style="width: 120px" type="date">--}}
{{--                            <label class="lab" style="font-size: 20px; width: auto; margin-left: 8px">To:</label>--}}
{{--                            <input class="Date text2" style="width: 125px" type="date" >--}}
{{--                            <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>--}}
                            <br>
                            <label class="lab" style="font-size: 20px; width: 90px">ID NO.</label>
                            <input id="idno" class="text2" style="width: 300px" type="text">
                            <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="getKey('idno')">Search</a></span>
                            <label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">R.N MPI:</label>
                            <input id="rn" class="Date text2" style="width: 300px" type="text">
                            <span class="sp"><a style="cursor: pointer" onclick="getKey('rn')">Search</a></span>
                        </div>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1280px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1280px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Name_C</th>
                            <th>Address</th>
                            <th>ID_WO</th>
                            <th>Report_num</th>
                            <th>Date_Report</th>
                            <th>Date_Report1</th>
                            <th>Date_TE</th>
                            <th>Date_TE1</th>
                            <th>Date_MK</th>
                            <th>Date_LTE</th>
                            <th>Date_NTE</th>
                            <th>Type_TV</th>
                            <th>SAFE_OP</th>
                            <th>UNIT_TB</th>
                            <th>UNIT_CN</th>
                            <th>UNIT_TD</th>
                            <th>SLING_TB</th>
                            <th>SLING_CN</th>
                            <th>SLING_TD</th>
                            <th>Name_per_mrep</th>
                            <th>Name_per_arep</th>
                            <th>Latest_date</th>
                            <th>Latest_date1</th>
                            <th>Name_add_emp</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">

        $('#clientname').change(function() {
            document.getElementById('address').disabled = false;
            document.getElementById('work').disabled = false;
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findAdd')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#address").empty();
                            $("#work").empty();
                            $("#work").append('<option>Select Work Order</option>');
                            $.each(res, function(key,value) {
                                if(key === "add"){
                                    $("#address").val(value.Address);
                                }
                                if(key === "wo"){
                                    $.each(value, function(key1, value1) {
                                        $("#work").append('<option value="' + value1.ID_WO + '">' + value1.ID_WO +
                                            '</option>');
                                        // console.log(value1);
                                    });
                                }
                            });

                        } else {
                            $("#address").empty();
                            $("#work").empty();
                        }
                    }
                });
            } else {
                $("#work").empty();
                $("#address").empty();
            }
        });

        $('#work').change(function () {
            var work = $(this).val();
            if (work) {
                $.ajax({
                    type: "GET",
                    url: "{{route('getCert')}}",
                    data: {work: work},
                    success: function(res) {
                        if (res) {
                            document.getElementById('reportNo').disabled = false;
                            $("#reportNo").empty();
                            $("#reportNo").val(res);
                            console.log(res);
                        } else {
                            $("#reportNo").empty();
                        }
                    }
                });
            } else {
                $("#reportNo").empty();
            }

            document.getElementById('date1').disabled = false;
            document.getElementById('date2').disabled = false;
            document.getElementById('date3').disabled = false;
            document.getElementById('date4').disabled = false;
            document.getElementById('date5').disabled = false;
            document.getElementById('date6').disabled = false;
            document.getElementById('dropDate').disabled = false;
            document.getElementById('dateTxt').disabled = false;
            document.getElementById('box1').disabled = false;
            document.getElementById('box2').disabled = false;
            document.getElementById('box3').disabled = false;
            document.getElementById('box4').disabled = false;
            document.getElementById('choose').disabled = false;
            document.getElementById('s').disabled = false;
            document.getElementById('et').disabled = false;
            document.getElementById('cm').disabled = false;
            document.getElementById('tpn').disabled = false;
            document.getElementById('ps').disabled = false;
            document.getElementById('ind').disabled = false;
            document.getElementById('ins').disabled = false;
            document.getElementById('qualification').disabled = false;
            document.getElementById('drop1').disabled = false;
            document.getElementById('drop2').disabled = false;
            document.getElementById('drop3').disabled = false;
            document.getElementById('datee').disabled = false;

        });

        $('#choose').change(function () {
            document.getElementById('label').innerHTML = this.value;
            document.getElementById('tb').disabled = false;
            document.getElementById('certNo').disabled = false;
            document.getElementById('date7').disabled = false;
            document.getElementById('date8').disabled = false;
        });
        function get_action1(form) {
            form.action = "{{route('insertTVNew')}}";
        }
        var r = "";
        function get_action2(form) {
            if (r === ""){
                alert("Select an id to edit");
            }
            form.action = "{{route('editTV')}}";
        };
        function getKey(key){
            showTable('table')
            var searchKey = "";
            if (key === "report"){
                searchKey = $("#repno").val();
            } else if (key === "idno"){
                searchKey = $("#idno").val();
            } else if (key === "rn") {
                searchKey = $("#rn").val();
            }
            if (searchKey === ""){
                searchKey = "empty"
            }
            $.ajax({
                type: "GET",
                url: "{{route('searchTV')}}",
                data: {quote: searchKey,searchType: key},
                success: function(res) {
                    if (res) {
                        DeleteRows();
                        $.each(res, function(key,value) {
                            $("#table").append('<tr onclick="show()" id="' + value._id + '">'+
                                '<td>' + value.Name_C + '</td>'+
                                '<td>' + value.Address + '</td>'+
                                '<td>' + value.ID_WO + '</td>'+
                                '<td>' + value.Report_num + '</td>'+
                                '<td>' + value.Date_Report + '</td>'+
                                '<td>' + value.Date_Report1 + '</td>'+
                                '<td>' + value.Date_TE + '</td>'+
                                '<td>' + value.Date_TE1 + '</td>'+
                                '<td>' + value.Date_MK + '</td>'+
                                '<td>' + value.Date_LTE + '</td>'+
                                '<td>' + value.Date_NTE + '</td>'+
                                '<td>' + value.Type_TV + '</td>'+

                                '<td>' + value.SAFE_OP + '</td>'+
                                '<td>' + value.UNIT_TB + '</td>'+
                                '<td>' + value.UNIT_CN + '</td>'+
                                '<td>' + value.UNIT_TD + '</td>'+
                                '<td>' + value.SLING_TB + '</td>'+
                                '<td>' + value.SLING_CN + '</td>'+
                                '<td>' + value.SLING_TD + '</td>'+
                                '<td>' + value.Name_per_mrep + '</td>'+
                                '<td>' + value.Name_per_arep + '</td>'+
                                '<td>' + value.Latest_date + '</td>'+
                                '<td>' + value.Latest_date1 + '</td>'+
                                '<td>' + value.Name_add_emp + '</td>'+
                                '</tr>');
                        });
                    } else {
                        DeleteRows();
                    }
                }
            });

        };
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
            document.getElementById('clientname').value = check(data[0].innerHTML);
            document.getElementById('address').value = check(data[1].innerHTML);

            var x = check(data[2].innerHTML)
            $("#work").append('<option>' + x + '</option>');
            document.getElementById('work').value = check(data[2].innerHTML);
            document.getElementById('reportNo').value = check(data[3].innerHTML);
            document.getElementById('date2').value = check(data[4].innerHTML);
            document.getElementById('date4').value = check(data[5].innerHTML);
            document.getElementById('date6').value = check(data[6].innerHTML);
            document.getElementById('dropDate').value = check(data[7].innerHTML);
            document.getElementById('dateTxt').value = check(data[8].innerHTML);
            document.getElementById('box1').value = check(data[9].innerHTML);
            document.getElementById('box2').value = check(data[10].innerHTML);
            document.getElementById('box3').value = check(data[11].innerHTML);
            document.getElementById('box4').value = check(data[12].innerHTML);
            document.getElementById('choose').value = check(data[13].innerHTML);
            document.getElementById('tb').value = check(data[14].innerHTML);
            document.getElementById('certNo').value = check(data[15].innerHTML);
            document.getElementById('date8').value = check(data[16].innerHTML);
            document.getElementById('drop1').value = check(data[25].innerHTML);
            document.getElementById('drop2').value = check(data[26].innerHTML);
            document.getElementById('drop3').value = check(data[27].innerHTML);
            r = rowId;
            document.getElementById('id').value = r;
        }


    </script>
@stop
