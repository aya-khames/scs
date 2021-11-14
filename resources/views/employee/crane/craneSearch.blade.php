@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1330px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Crane</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='cranen';" class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='cranep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 120px">Crane Type:</label>
                        <a style="padding: unset">
                            <select style="width: 350px" class="miniDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                                <option>Crawler Crane</option>
                                <option>Mobile Crane</option>
                                <option>Tower Crane</option>
                            </select>
                        </a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 120px">CERT No.</label>
                        <input class="text2" style="width: 350px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 120px">Date:</label>
                        <input class="Date text2" style="width: 155px" type="date"><span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 5px">To:</label> <input class="Date text2" style="width: 155px" type="date" ></span> <span class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 18px; width: 120px">Makers Serial No.</label>
                        <input class="text2" style="width: 350px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>

                        <label class="lab" style="font-size: 18px; width: 200px; margin-left: 20px">Owner distinguishing mark of number (if any):</label>
                        <input class="text2" style="width: 350px" type="text"> <span style="width: 80px" class="sp"><a style="cursor: pointer" onclick="showTable('table')">Search</a></span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Certificate Number</th>
                            <th>Client</th>
                            <th>Work Order</th>
                            <th>Certificate Type</th>
                            <th>Crane Type</th>
                            <th>Date</th>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>

    </script>
@stop
