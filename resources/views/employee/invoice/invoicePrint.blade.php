@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Invoice</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='invn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='invd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div  class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
                <div onclick="location.href='invc';" class="lab tab">
                    <a>Collect</a>
                </div>
            </nav>
            <br>
            <div style="height: 625px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Invoice:</label>
                        <input id="invoice" class="text2" style="width: 400px" type="text">
                        <a class="sp" style="margin-left: 20px;cursor: pointer" onclick="showTable('table')">Search</a>
                        <span>
                        <label class="lab" style="font-size: 20px; width: 70px; margin-left: 20px">Client:</label>
                        <input id="client" disabled readonly class="text2" style="width: 400px" type="text">
                    </span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                        <input id="work" disabled readonly class="text2" style="width: 400px" type="text">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 200px">Terms of payment:</label>
                        <br>
                        <span>
                        <textarea id="notes" disabled class="text2" style="width: 400px; height: 50px; resize: none; margin-left: 150px; scroll-behavior: smooth; display: inline-block">Maximum ONE MONTH from invoice date.</textarea>
                        <div style="margin-left: 190px; display: inline-block">
                            <button class="bttn" style="width: 200px">Print with logo</button>
                            <br>
                            <button class="bttn" style="width: 200px">Print without logo</button>
                        </div>
                    </span>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1190px">
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
    function enable() {
        document.getElementById('client').disabled = false;
        document.getElementById('work').disabled = false;
        document.getElementById('notes').disabled = false;
    };
</script>
@stop
