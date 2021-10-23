@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Unsafe</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='unsafed';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='unsafep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='unsafes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <div style="margin: 5px; height: 600px; overflow-y: auto; width: 1340px">
                <form style="margin: 20px 20px 0 20px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 140px">Client:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 40px">Address:</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px">Work Order:</label>
                        <a style="padding: unset">
                            <select class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 20px; width: 110px; margin-left: 40px">Report No.</label>
                        <input class="text2" style="width: 400px" type="text">
                        <label class="lab" style="font-size: 20px; width: 140px">Report Date:</label>
                        <input class="Date text2" style="width: 190px" type="date">
                        <input class="Date text2" style="width: 195px" type="text">
                        <label class="lab" style="font-size: 18px; width: 110px; margin-left: 40px">ID No.</label>
                        <input class="Date text2" style="width: 400px" type="text">
                    </div>
                </form>

                <form style="display: inline-block; margin: 10px 10px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 500px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 18px; width: 350px; margin-left: 10px">Is this the first examination after installation or assembly at a new site or location?</label>
                        <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        <br><br>
                        <label class="lab" style="font-size: 18px; width: 350px; margin-left: 10px">If YES, has the equipment been installed correctly?</label>
                        <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <div style="display: inline-block">
                    <label style="margin: 20px 20px 5px 40px; color: #0b3756; font-family: 'Times New Roman'; font-size: 20px; font-style: italic; font-weight: bold">
                        Was the examination carried out:</label><br>
                    <form style="margin: 10px 20px 10px 10px;box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 750px">
                        <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                            <label class="lab" style="font-size: 18px; width: 250px; margin-left: 10px">within an interval of 6 months?</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <label class="lab" style="font-size: 18px; width: 210px; margin-left: 30px">In accordance with an examination scheme?</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <br><br>
                            <label class="lab" style="font-size: 18px; width: 250px; margin-left: 10px">within an interval of 12 months?</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                            <label class="lab" style="font-size: 18px; width: 210px; margin-left: 30px">After the occurrence of exceptional circumstances?</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                            <input type="radio" style="margin-left: 10px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        </div>
                    </form>
                </div>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">Identification of any part found to have a defect which is or could become a danger to persons and a description of the defect:</label>

                        <textarea disabled class="text2" style="resize: none; width: 600px; height: 80px"></textarea>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: auto">Is the above a defect which is of immediate danger to persons:</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                        <br>
                        <label class="lab" style="font-size: 20px; width: auto">Is the above a defect which is not yet but could become a danger to persons:</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 500px">
                            Particulars of any repair, renewal or alteration required to remedy the defect identified above:
                        </label>
                        <textarea disabled class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                        <br>
                        <label class="lab" style="font-size: 20px; width: 500px">
                            particulars of any tests carried out as part of the examination (if none state NONE):
                        </label>
                        <textarea disabled class="text2" style="resize: none; width: 600px; height: 50px"></textarea>
                    </div>
                </form>

                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 20px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 18px; width: auto">IS THIS EQUIPMENT SAFE TO OPERATE:</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" style="margin-left: 20px"><label style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; box-shadow: 0 0 20px rgba(15,70,108,0.65)">
                        <label class="lab" style="font-size: 18px; width: 280px">Name of person making this report:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name of person authenticating this report:</label>
                        <a style="padding: unset">
                            <select style="width: 300px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                        <br>
                        <label class="lab" style="font-size: 18px; width: 280px">Latest date by which next thorough examination must be carried out:</label>
                        <input class="text2" style="width: 140px" type="date">
                        <input class="text2" style="width: 145px" type="text">
                        <label class="lab" style="font-size: 18px; width: 280px; margin-left: 20px">Name and address of employer of persons making and authenticating this report:</label>
                        <a style="padding: unset">
                            <select  style="width: 300px" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="" disabled selected></option>
                            </select>
                        </a>
                    </div>
                </form>
                <div style="margin-left: 530px">
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)">Edit</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                </div>
            </div>
        </fieldset>
    </div>
@stop
