@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
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
                        <label class="lab" style="font-size: 20px; width: 165px">Report No.</label> <input name="report" class="text2" style="margin-left:0; width: 400px" type="text">
                        <span class="sp">
                        <a style="margin-left: 10px; cursor: pointer" onclick="showTable('table')">Search</a>
                    </span>
                        <a class="sp" style="margin-left: 20px; text-decoration: none">Search Edit</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 165px">Work order:</label> <input name="work" disabled id="work" class="text2" style="margin-left:0; width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input name="client" disabled id="client" class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 165px">Safe working load:</label>
                        <input name="safewl" disabled id="safe" class="text2" style="width: 400px; margin-left: 0" type="text">
                        <br>

                        <label class="lab" style="font-size: 20px; width: 165px">Date of manufacture if known:</label>
                        <input name="datem" disabled id="date1" class="text2" style="width: 190px; margin-left: 0" type="date">
                        <input disabled readonly id="date2" class="text2" style="width: 190px" type="text">

                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 20px">Date of last thorough examination:</label>
                        <input name="datele" disabled id="date3" class="text2" style="width: 190px" type="date">
                        <input disabled readonly id="date4" class="text2" style="width: 190px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <br>
                        <textarea name="description" disabled id="txt" class="text2" style="width: 400px;margin-left: 165px; height: 150px; scroll-behavior: smooth; resize: none"></textarea>
                        <span>
                        <div style="margin-left: 120px; display: inline-block">
                            <button disabled class="bttn">Print</button>
                            <button class="bttn">Delete</button>
                            <button class="bttn">Edit</button>
                            <button class="bttn" type="submit" onclick="get_action1(this.form)">Insert</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1220px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1220px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
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
            form.action = "{{route('insertUSD')}}";
        };

    </script>
@stop
