@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1350px; background-color: rgba(240,248,248,0.57)">
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
            <div style="height: 600px; overflow-y: auto">
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">A. Tower Crane Approved For Use</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">1 CERTIFICATION</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="one" id="one1" style="margin-left: 20px"><label for="one1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="one" id="one2" style="margin-left: 20px"><label for="one2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">2 GENERAL CONDITION</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="two" id="two1" style="margin-left: 20px"><label for="two1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="two" id="two2" style="margin-left: 20px"><label for="two2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">B. General Requirements</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">3 Tower Crane is provided with markings of the Safe Working</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="three" id="three1" style="margin-left: 20px"><label for="three1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="three" id="three2" style="margin-left: 20px"><label for="three2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">4 Safe access and egress are provided to the crane operator</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="four" id="four1" style="margin-left: 20px"><label for="four1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="four" id="four2" style="margin-left: 20px"><label for="four2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">5 A load capacity chart is displayed in the operator cabin</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="five" id="five1" style="margin-left: 20px"><label for="five1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="five" id="five2" style="margin-left: 20px"><label for="five2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">6 operator crane cabin is provided with a locking mechanism so as to prevent unauthorized entry</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="six" id="six1" style="margin-left: 20px"><label for="six1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="six" id="six2" style="margin-left: 20px"><label for="six2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">7 A safety bar is fitted across the operator's cabin window where there is likelihood of the operator falling through it</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="seven" id="seven1" style="margin-left: 20px"><label for="seven1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="seven" id="seven2" style="margin-left: 20px"><label for="seven2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">8 Fire extinguisher is fit for use and provided in the operator cabin</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="eight" id="eight1" style="margin-left: 20px"><label for="eight1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="eight" id="eight2" style="margin-left: 20px"><label for="eight2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">9 An updated operation an maintenance log book is available in the operator cabin</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="nine" id="nine1" style="margin-left: 20px"><label for="nine1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="nine" id="nine2" style="margin-left: 20px"><label for="nine2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">10 Manufacturer operating manual and maintenance manual are made available</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="ten" id="ten1" style="margin-left: 20px"><label for="ten1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="ten" id="ten2" style="margin-left: 20px"><label for="ten2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">11 Tower crane is adequately grounded or protected against lightning</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="eleven" id="eleven1" style="margin-left: 20px"><label for="eleven1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="eleven" id="eleven2" style="margin-left: 20px"><label for="eleven2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">C. Other Visual Checks</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">12 Load charts and other symbols are available and visible</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="twelve" id="twelve1" style="margin-left: 20px"><label for="twelve1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="twelve" id="twelve2" style="margin-left: 20px"><label for="twelve2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">13 Hydraulic fluid level is sufficient</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="th" id="th1" style="margin-left: 20px"><label for="th1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="th" id="th2" style="margin-left: 20px"><label for="th2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">14 Slewing oil level is sufficient</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="for" id="for1" style="margin-left: 20px"><label for="for1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="for" id="for2" style="margin-left: 20px"><label for="for2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">15 All mounting bolts are in good condition</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="fif" id="fif1" style="margin-left: 20px"><label for="fif1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="fif" id="fif2" style="margin-left: 20px"><label for="fif2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">16 Hydraulic system is free of leaks</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="si" id="si1" style="margin-left: 20px"><label for="si1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="si" id="si2" style="margin-left: 20px"><label for="si2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">17 Boom sections are free of cracks or dents</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="sev" id="sev1" style="margin-left: 20px"><label for="sev1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="sev" id="sev2" style="margin-left: 20px"><label for="sev2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">18 Main and auxiliary wire ropes are well lubricated and that there are no visible defects such as broken wires, kinks</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="ei" id="ei1" style="margin-left: 20px"><label for="ei1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="ei" id="ei2" style="margin-left: 20px"><label for="ei2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">19 Winches, pulleys and wire ropes are in good working condition</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="ni" id="ni1" style="margin-left: 20px"><label for="ni1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="ni" id="ni2" style="margin-left: 20px"><label for="ni2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">20 Crane hook is provided with a safety catch to prevent displacement of the sling or load from the hook</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="tew" id="tew1" style="margin-left: 20px"><label for="tew1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="tew" id="tew2" style="margin-left: 20px"><label for="tew2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">D. Safety and Operational Devices</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">21 Load radius indicator with warning alarm is installed</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="onee" id="onee1" style="margin-left: 20px"><label for="onee1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="onee" id="onee2" style="margin-left: 20px"><label for="onee2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">22 Jib angle indicator is provided (For Luffing Jib Tower Crane)</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="twoo" id="twoo1" style="margin-left: 20px"><label for="twoo1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="twoo" id="twoo2" style="margin-left: 20px"><label for="twoo2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">23 Emergency stop button, which will terminate the operation of the crane engine, is installed in the operator</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="threee" id="threee1" style="margin-left: 20px"><label for="threee1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="threee" id="threee2" style="margin-left: 20px"><label for="threee2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">24 Effictive braking mechanisms for the following is maintained:</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="fourr" id="fourr1" style="margin-left: 20px"><label for="fourr1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="fourr" id="fourr2" style="margin-left: 20px"><label for="fourr2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(a) Hoisting</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="a" id="a1" style="margin-left: 20px"><label for="a1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="a" id="a2" style="margin-left: 20px"><label for="a2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(b) Derricking</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="b" id="b1" style="margin-left: 20px"><label for="b1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="b" id="b2" style="margin-left: 20px"><label for="b2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(c) Slewing</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="c" id="c1" style="margin-left: 20px"><label for="c1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="c" id="c2" style="margin-left: 20px"><label for="c2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(d) Trolley Travelling</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="d" id="d1" style="margin-left: 20px"><label for="d1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="d" id="d2" style="margin-left: 20px"><label for="d2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">25 Hoisting Limiter to prevent over-hoisting of the hook block is functional</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="fivee" id="fivee1" style="margin-left: 20px"><label for="fivee1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="fivee" id="fivee2" style="margin-left: 20px"><label for="fivee2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">26 Trolley Travelling Limiter to prevent over-travelling of trolley is functional</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="six" id="six1" style="margin-left: 20px"><label for="six1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="six" id="six2" style="margin-left: 20px"><label for="six2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">27 Limit switches to prevent over-derricking and over-lowering of jib (For Luffing Jib Tower Crane) is functional</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="sevenn" id="sevenn1" style="margin-left: 20px"><label for="sevenn1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="sevenn" id="sevenn2" style="margin-left: 20px"><label for="sevenn2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">28 Slewing limiter to restrict slewing of crane is functional</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="eightt" id="eightt1" style="margin-left: 20px"><label for="eightt1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="eightt" id="eightt2" style="margin-left: 20px"><label for="eightt2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">29 Wind anemometer is installed and is in good working condition</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="ninee" id="ninee1" style="margin-left: 20px"><label for="ninee1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="ninee" id="ninee2" style="margin-left: 20px"><label for="ninee2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">30 Adequate aircraft warning lights and/or chequered white and red flags are provided</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="tenn" id="tenn1" style="margin-left: 20px"><label for="tenn1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="tenn" id="tenn2" style="margin-left: 20px"><label for="tenn2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">31 Anti-collision devices are tested to stop the tower crane's operation such that the crane-to-crane interference must be</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="elevenn" id="elevenn1" style="margin-left: 20px"><label for="elevenn1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="elevenn" id="elevenn2" style="margin-left: 20px"><label for="elevenn2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">32 Overload limiter to prevent overloading of crane is functional</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="twelvee" id="twelvee1" style="margin-left: 20px"><label for="twelvee1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="twelvee" id="twelvee2" style="margin-left: 20px"><label for="twelvee2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">E. Counter Weight</label>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">33 Counter jib (Condition)</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="thh" id="thh1" style="margin-left: 20px"><label for="thh1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="thh" id="thh2" style="margin-left: 20px"><label for="thh2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">34 Counter Balance (How much weight)</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="forr" id="forr1" style="margin-left: 20px"><label for="forr1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="forr" id="forr2" style="margin-left: 20px"><label for="forr2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <form style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">35 Maintenance work on the Tower Crane is carried out by Competent Persons</label>
                        <input class="text2" style="width: 400px" type="text">
                        <input type="radio" name="fiff" id="fiff1" style="margin-left: 20px"><label for="fiff1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="fiff" id="fiff2" style="margin-left: 20px"><label for="fiff2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </form>
                <div style="margin-left: 50px">
                    <button onclick="location.href='cranen';" class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86)"><< Back</button>

                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin-left: 900px">Edit</button>
                    <button class="bttn" style="box-shadow: 0 0 20px rgb(11,55,86); margin: 20px">Insert</button>
                </div>
            </div>
        </fieldset>
    </div>
@stop
