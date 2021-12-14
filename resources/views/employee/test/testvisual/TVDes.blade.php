@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 30px; font-weight: bold">Test & Visual</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='tvn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='tvp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1280px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Report No.</label> <input id="repNo" name="repNo" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="getKey('search')">Search</a>
                    </span>
                        <a onclick="getKey('edit')" class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label> <input name="work" readonly disabled id="work" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">Client:</label> <input name="client" readonly disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 140px">Proof load:</label> <input name="pl" disabled id="pl" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">QTY:</label> <input name="qty" disabled id="qty" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 17px; width: 140px">Safe working load:</label> <input name="safe" disabled id="safe" class="text2" style="width: 400px; margin-right: 20px" type="text">
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">ID No.</label> <input name="idNumber" disabled id="idNumber" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea name="description" disabled id="description" class="text2" style="width: 400px;margin-left: 145px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                                                        <input name="id" readonly id="id" class="text2" style="display: none" type="text">

                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn" type="submit" onclick="deleteTV(this.form)">Delete</button>
                            <button class="bttn" type="submit" onclick="editTV(this.form)">Edit</button>
                            <button class="bttn" type="submit" onclick="insertTV(this.form)">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <form name="helper" id="helper" style="display: none">
                    <input id="report" name="report" type="text">
                    <input name="searchType" readonly id="searchType" class="text2" style="display: none" type="text">
                </form>
                <br>
                @if($posts !== "")
                    @if($t === "search")
                        <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                            <table id="table" style="width: 1190px">
                                <tr style="color: white; background-color: #0b3756; cursor: default">
                                    <th>Name_C</th>
                                    <th>ID_WO</th>
                                    <th>Report_num</th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr onclick="show('search')" id="'+ {{$post->_id}}+ '">
                                        <td>{{$post->Name_C}}</td>
                                        <td>{{$post->ID_WO}}</td>
                                        <td>{{$post->Report_num}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div>{{$posts->appends(request()->input())->links()}} </div>
                    @elseif($t !== "search")
                        <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                            <table id="table" style="width: 1190px">
                                <tr style="color: white; background-color: #0b3756; cursor: default">
                                    <th>Name_C</th>
                                    <th>ID_WO</th>
                                    <th>Report_num</th>
                                    <th>ID_NUM</th>
                                    <th>QTY</th>
                                    <th>Description</th>
                                    <th>Safe_WL</th>
                                    <th>Proof_load</th>
                                </tr>
                                    @foreach($posts as $post)
                                        <tr onclick="show('edit')" id="'+ {{$post->_id}}+ '">
                                            <td>{{$post->Name_C}}</td>
                                            <td>{{$post->ID_WO}}</td>
                                            <td>{{$post->Report_num}}</td>
                                            <td>{{$post->ID_NUM}}</td>
                                            <td>{{$post->QTY}}</td>
                                            <td>{{$post->Description}}</td>
                                            <td>{{$post->Safe_WL}}</td>
                                            <td>{{$post->Proof_load}}</td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <div>{{$posts->appends(request()->input())->links()}} </div>
                    @endif
                @endif
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>

        function insertTV(form) {
            form.action = '{{route('insertTVD')}}'
        }
        var r = "";
        function editTV(form) {
            if(r === ""){
                alert("Choose an id to edit");
            }
            form.action = '{{route('editTVD')}}'
        }
        function deleteTV(form) {
            if(r === ""){
                alert("Choose an id to delete")
            }
            form.action = '{{route('deleteTVD')}}'
        }
        function getKey(key){
            document.getElementById('searchType').value = key;
            var quote = "";
            quote = $("#repNo").val();
            if(quote === ""){
                quote = "empty";
            }
            document.getElementById('report').value = quote;
            document.forms["helper"].action = "{{route('searchTVD')}}";
            document.forms["helper"].submit();
        }
        function show(key){
            var rowId =
                event.target.parentNode.id;
            var data = document.getElementById(rowId).querySelectorAll("td");
            if (key !== "search"){

                document.getElementById('idNumber').value = check(data[3].innerHTML);
                document.getElementById('qty').value = check(data[4].innerHTML);
                document.getElementById('description').value = check(data[5].innerHTML);
                document.getElementById('safe').value = check(data[6].innerHTML);
                document.getElementById('pl').value = check(data[7].innerHTML);
                r = rowId;
                document.getElementById('id').value = r;
            }
            document.getElementById('client').value = check(data[0].innerHTML);
            document.getElementById('work').value = check(data[1].innerHTML);
            document.getElementById('repNo').value = check(data[2].innerHTML);
        }
        function DeleteRows() {
            var rowCount = table.rows.length;
            for (var i = rowCount - 1; i > 0; i--) {
                table.deleteRow(i);
            }
        }
    </script>

@stop
