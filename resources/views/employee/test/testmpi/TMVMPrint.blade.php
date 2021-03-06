@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
     box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 50px;
      margin-left: 400px; z-index: 20; height: 780px; width: 1330px;
       background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 30px; font-weight: bold">Test_MPI & Visual_MPI</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='tmvmn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='tmvmd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Print</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1320px">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Report No.</label>
                        <input class="text2" style="width: 400px" type="text">
                        <a class="sp" style="margin-left: 20px; cursor: pointer" onclick="showTable('table')">Search</a>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label>
                        <input disabled readonly id="work" class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label>
                        <input disabled readonly id="client" class="text2" style="width: 400px" type="text">
                        <br><br>
                        <div style="padding: 15px; color: #1a1a1a; box-shadow: 0 0 20px rgba(15,70,108,0.65); background-color: rgba(240,248,248,0.05); overflow-y: auto; height: 100px">
                            <p style="line-height: 1">(a) The lifting operations and lifting equipments regulations 1998 S.I. No. 2307.</p>
                            <p style="line-height: 1">(b) The supply of machinery (safety) regulations 1992 S.I. No. 3073.</p>
                            <p style="line-height: 1">(c) The provision and Use of Work Equipment Regulations 1998 S.l. No. 2306 I hereby certify that the equipment described on this certificate has been examined and found to be free from flaws or other defects.</p>
                        </div>
                    </div>
                    <div style="margin-left: 460px; display: inline-block; margin-bottom: 20px">
                        <button class="bttn" style="width: 200px; font-size: 18px">Print with logo</button>
                        <button class="bttn" style="width: 200px; font-size: 18px">Print without logo</button>
                    </div>
                </form>
                <br>
                <div style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px; max-height: 400px; overflow-y: auto">
                    <table id="table" style="display: none; width: 1250px">
                        <tr style="color: white; background-color: #0b3756; cursor: default">
                            <th>Report Number</th>
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
        function enable(){
            document.getElementById('work').disabled = false;
            document.getElementById('client').disabled = false;
        };
    </script>
@stop
