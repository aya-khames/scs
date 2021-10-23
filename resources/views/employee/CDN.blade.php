@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">CDN</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset; height: 47px" class="navbar navbar-expand-lg navbar-light bg-white">
            </nav>
            <br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 90px">Client:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 20px">Work Order:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                        </select>
                    </a>
                    <br>
                    <label class="lab" style="font-size: 20px; width: 90px">Contact:</label>
                    <a style="padding: unset">
                        <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected></option>
                        </select>
                    </a>
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 20px">Quotation:</label>
                    <input class="text2" style="width: 400px" type="text">
                    <br>
                    <div style="margin-left: 870px; display: inline-block">
                        <button class="bttn" style="width: 200px">Print with logo</button>
                        <br>
                        <button class="bttn" style="width: 200px">Print without logo</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
@stop
