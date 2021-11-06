@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66);
    box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px;
    margin-left: 400px; z-index: 20; height: 800px; width: 1270px;
    background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Invoice</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='invn';"  class="lab tab">
                    <a>New</a>
                </div>
                <div class="lab tabSelected" style="cursor: default">
                    <a>Description</a>
                </div>
                <div onclick="location.href='invp';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='invc';" class="lab tab">
                    <a>Collect</a>
                </div>
            </nav>
            <br>
            <div style="height: 635px; width: 1260px; overflow-y: auto">
                <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1190px" method="POST">
                    @csrf
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 130px">Invoice:</label> <input name="invoice" class="text2" style="width: 400px" type="text">
                        <span class="sp"><a style="margin-left: 10px; cursor: pointer" onclick="showTable('table')">Search</a></span>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input name="work" disabled class="text2" style="width: 400px" type="text">
                        <span><label class="lab" style="font-size: 20px; width: 90px; margin-left: 20px">Client:</label> <input name="client" disabled class="text2" style="width: 400px" type="text"></span>
                        <br>
                        <input style="margin-left: 675px; height: 17px; width: 17px" disabled id="check" value="0" type="checkbox">
                        <br>
                        <label class="lab" style="font-size: 20px; width: 130px">Description:</label>
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 430px">Unit Price:</label><input name="price" disabled id="check1" class="text2" style="width: 70px; margin-top: 10px" type="text">
                        <label class="lab" style="font-size: 20px; width: 48px; margin-left: 5px">QTY:</label><input disabled name="qty" id="check2" class="text2" style="width: 70px" type="text">
                        <label class="lab" style="font-size: 20px; width: 100px; margin-left: 5px">Total Price:</label><input name="ttlPrice" disabled readonly class="text2" style="width: 70px" type="text">
                        <br>
                        <textarea name="description" disabled class="text2" style="width: 400px;margin-left: 145px; height: 150px; resize: none"></textarea>
                        <br>
                        <div style="margin-left: 900px; display: inline-block">
                            <button class="bttn" >Print</button>
                            <button class="bttn" type="submit" onclick="get_action2(this.form)">Edit</button>
                        </div>
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
        $('#check').click(function() {
            console.log(this.getAttribute("value"));
            if(this.getAttribute("value") === "0"){

                document.getElementById('check1').disabled = false;
                document.getElementById('check2').disabled = false;
                this.setAttribute("value", "1");
            }else {
                document.getElementById('check1').disabled = true;
                document.getElementById('check2').disabled = true;
                this.setAttribute("value", "0");
            }
        });
        function get_action2(form) {
            {{--form.action = "{{route('insertInvoiceN')}}";--}}
        }
    </script>
@stop
