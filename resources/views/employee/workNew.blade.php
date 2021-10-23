@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Work Order</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='workd';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='workp';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                @csrf
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a href="#" style="padding: unset">
                        <select name="client" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Client</option>
                            @foreach($clients as $client)
                                <option value="{{$client->Name_C}}">{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Quotation:</label>
                        <a href="#" style="padding: unset; text-decoration: none">
                            {{--there's an issue--}}
                            <select id="test" name="quotation" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected>Quotation</option>
                            </select>
                        </a>
                    <label class="lab" style="font-size: 20px; width: 130px">Work Order:</label> <input name="workOrder" class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Contact:</label> <input name="contperson" class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">PO:</label> <input name="po" class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Fax No:</label> <input name="fax" class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Currency:</label> <input name="currency" class="text2" style="width: 400px" type="text">
                    <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Date:</label> <input name="date" class="Date text2" style="width: 400px" type="date"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Date:</label> <input name="delivery" class="Date text2" style="width: 400px" type="date">
                    <span><label class="lab" style="font-size: 20px; width: 110px; margin-left: 30px">Validity:</label> <input name="valedity" class="text2" style="width: 400px" type="text"></span>
                    <label class="lab" style="font-size: 20px; width: 130px">Note:</label> <input name="note" class="text2" style="width: 400px; display: inline-block" type="text">
                    <div style="margin-left: 360px; display: inline-block">
                        <button type="submit" onclick="get_action2(this.form)" class="bttn">Edit</button>
                        <button type="submit" onclick="get_action3(this.form)" class="bttn">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 120px">Work Order:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 100px; margin-left: 25px">Date:</label><input class="Date text2" style="width: 150px" type="date"><span><label class="lab" style="font-size: 20px; width: 20px; margin-left: 10px">To:</label> <input class="Date text2" style="width: 150px" type="date" ></span> <span class="sp"><a href="#">Search</a></span>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 120px">Client:</label> <input class="text2" style="width: 400px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                    <label class="lab" style="font-size: 20px; width: 100px; margin-left: 20px">Quotation:</label> <input class="text2" style="width: 345px" type="text"> <span style="width: 80px" class="sp"><a href="#">Search</a></span>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function get_action2(form) {
            form.action = "{{route('editWorkNew')}}";
        }
        function get_action3(form) {
            form.action = "{{route('insertWorkNew')}}";
        }

    </script>
@stop
