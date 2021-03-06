@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: absolute; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1360px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Crane</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='cranen';" class="lab tab">
                    <a>New</a>
                </div>
                <div onclick="location.href='cranep';" class="lab tab">
                    <a>Print</a>
                </div>
                <div onclick="location.href='cranes';" class="lab tab">
                    <a>Search</a>
                </div>
            </nav>
            <br>
            <form style="height: 600px; width: 1350px; overflow-y: auto; margin: unset">
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">1 CERTIFICATION</label>
                        <input class="text2" id="text111" style="width: 400px" type="text">
                        <input type="radio" name="one" id="one1" style="margin-left: 20px" value="Yes"><label for="one1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="one" id="one2" style="margin-left: 20px" value="No"><label for="one2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">2 GENERAL CONDITION</label>
                        <input class="text2" id="text222" style="width: 400px" type="text">
                        <input type="radio" name="two" id="two1" style="margin-left: 20px" value="Yes"><label for="two1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="two" id="two2" style="margin-left: 20px" value="No"><label for="two2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">3 WIRE ROPES</label>
                        <input class="text2" id="text3" style="width: 400px" type="text">
                        <input type="radio" name="three" id="three1" style="margin-left: 20px" value="Yes"><label for="three1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="three" id="three2" style="margin-left: 20px" value="No"><label for="three2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">4 BOOM AND TELESCOPE</label>
                        <input class="text2" id="text4" style="width: 400px" type="text">
                        <input type="radio" name="four" id="four1" style="margin-left: 20px" value="Yes"><label for="four1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="four" id="four2" style="margin-left: 20px" value="No"><label for="four2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">5 MAIN AND AUX. HOIST WINCHES</label>
                        <input class="text2" id="text5" style="width: 400px" type="text">
                        <input type="radio" name="five" id="five1" style="margin-left: 20px" value="Yes"><label for="five1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="five" id="five2" style="margin-left: 20px" value="No"><label for="five2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">6 BOOM HOIST CYLINDER(S)</label>
                        <input class="text2" id="text6" style="width: 400px" type="text">
                        <input type="radio" name="six" id="six1" style="margin-left: 20px" value="Yes"><label for="six1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="six" id="six2" style="margin-left: 20px" value="No"><label for="six2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">7 HOOK BLOCKS</label>
                        <input class="text2" id="text7" style="width: 400px" type="text">
                        <input type="radio" name="seven" id="seven1" style="margin-left: 20px" value="Yes"><label for="seven1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="seven" id="seven2" style="margin-left: 20px" value="No"><label for="seven2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">8 SLOW MOTION</label>
                        <input class="text2" id="text8" style="width: 400px" type="text">
                        <input type="radio" name="eight" id="eight1" style="margin-left: 20px" value="Yes"><label for="eight1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="eight" id="eight2" style="margin-left: 20px" value="No"><label for="eight2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">9 OUTRIGGERS</label>
                        <input class="text2" id="text9" style="width: 400px" type="text">
                        <input type="radio" name="nine" id="nine1" style="margin-left: 20px" value="Yes"><label for="nine1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="nine" id="nine2" style="margin-left: 20px" value="No"><label for="nine2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">10 OPERATORS CAB(S) AND CONTROLS</label>
                        <input class="text2" id="text10" style="width: 400px" type="text">
                        <input type="radio" name="ten" id="ten1" style="margin-left: 20px" value="Yes"><label for="ten1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="ten" id="ten2" style="margin-left: 20px" value="No"><label for="ten2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">11 STRUCTURE</label>
                        <input class="text2" id="text11" style="width: 400px" type="text">
                        <input type="radio" name="eleven" id="eleven1" style="margin-left: 20px" value="Yes"><label for="eleven1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="eleven" id="eleven2" style="margin-left: 20px" value="No"><label for="eleven2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">12 SAFETY DEVICES AND LIMIT SWITCHES</label>
                        <input class="text2" id="text12" style="width: 400px" type="text">
                        <input type="radio" name="twelve" id="twelve1" style="margin-left: 20px" value="Yes"><label for="twelve1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="twelve" id="twelve2" style="margin-left: 20px" value="No"><label for="twelve2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin-left: 50px">
                    <button onclick="location.href='cranen';" class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)"><< Back</button>

                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin-left: 900px">Edit</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>

    </script>
@stop
