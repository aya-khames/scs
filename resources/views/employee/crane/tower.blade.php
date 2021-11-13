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
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">A. Tower Crane Approved For Use</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">1 CERTIFICATION</label>
                        <input class="text2" id="text111" style="width: 400px" type="text">
                        <input type="radio" name="rad1" id="rad11" style="margin-left: 20px" value="Yes"><label for="rad11" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad1" id="rad12" style="margin-left: 20px" value="No"><label for="rad12" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">2 GENERAL CONDITION</label>
                        <input class="text2" id="text222" style="width: 400px" type="text">
                        <input type="radio" name="rad2" id="rad21" style="margin-left: 20px" value="Yes"><label for="rad21" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad2" id="rad22" style="margin-left: 20px" value="No"><label for="rad22" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <br>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-style: italic; font-weight: bold">B. General Requirements</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">3 Tower Crane is provided with markings of the Safe Working</label>
                        <input class="text2" id="text3" style="width: 400px" type="text">
                        <input type="radio" name="rad3" id="rad31" style="margin-left: 20px" value="Yes"><label for="rad31" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad3" id="rad32" style="margin-left: 20px" value="No"><label for="rad32" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">4 Safe access and egress are provided to the crane operator</label>
                        <input class="text2" id="text4" style="width: 400px" type="text">
                        <input type="radio" name="rad4" id="rad41" style="margin-left: 20px" value="Yes"><label for="rad41" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad4" id="rad42" style="margin-left: 20px" value="No"><label for="rad42" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">5 A load capacity chart is displayed in the operator cabin</label>
                        <input class="text2" id="text5" style="width: 400px" type="text">
                        <input type="radio" name="rad5" id="rad51" style="margin-left: 20px" value="Yes"><label for="rad51" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad5" id="rad52" style="margin-left: 20px" value="No"><label for="rad52" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">6 operator crane cabin is provided with a locking mechanism so as to prevent unauthorized entry</label>
                        <input class="text2" id="text6" style="width: 400px" type="text">
                        <input type="radio" name="rad6" id="rad61" style="margin-left: 20px" value="Yes"><label for="rad61" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad6" id="rad62" style="margin-left: 20px" value="No"><label for="rad62" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">7 A safety bar is fitted across the operator's cabin window where there is likelihood of the operator falling through it</label>
                        <input class="text2" id="text7" style="width: 400px" type="text">
                        <input type="radio" name="rad7" id="rad71" style="margin-left: 20px" value="Yes"><label for="rad71" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad7" id="rad72" style="margin-left: 20px" value="No"><label for="rad72" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">8 Fire extinguisher is fit for use and provided in the operator cabin</label>
                        <input class="text2" id="text8" style="width: 400px" type="text">
                        <input type="radio" name="rad8" id="rad81" style="margin-left: 20px" value="Yes"><label for="rad81" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad8" id="rad82" style="margin-left: 20px" value="No"><label for="rad82" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">9 An updated operation an maintenance log book is available in the operator cabin</label>
                        <input class="text2" id="text9" style="width: 400px" type="text">
                        <input type="radio" name="rad9" id="rad91" style="margin-left: 20px" value="Yes"><label for="rad91" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad9" id="rad92" style="margin-left: 20px" value="No"><label for="rad92" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">10 Manufacturer operating manual and maintenance manual are made available</label>
                        <input class="text2" id="text10" style="width: 400px" type="text">
                        <input type="radio" name="rad10" id="rad101" style="margin-left: 20px" value="Yes"><label for="rad101" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad10" id="rad102" style="margin-left: 20px" value="No"><label for="rad102" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">11 Tower crane is adequately grounded or protected against lightning</label>
                        <input class="text2" id="text11" style="width: 400px" type="text">
                        <input type="radio" name="rad11" id="rad111" style="margin-left: 20px" value="Yes"><label for="rad111" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad11" id="rad112" style="margin-left: 20px" value="No"><label for="rad112" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <br>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">C. Other Visual Checks</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">12 Load charts and other symbols are available and visible</label>
                        <input class="text2" id="text12" style="width: 400px" type="text">
                        <input type="radio" name="rad12" id="rad121" style="margin-left: 20px" value="Yes"><label for="rad121" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad12" id="rad122" style="margin-left: 20px" value="No"><label for="rad122" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">13 Hydraulic fluid level is sufficient</label>
                        <input class="text2" id="text13" style="width: 400px" type="text">
                        <input type="radio" name="rad13" id="rad131" style="margin-left: 20px" value="Yes"><label for="rad131" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad13" id="rad132" style="margin-left: 20px" value="No"><label for="rad132" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">14 Slewing oil level is sufficient</label>
                        <input class="text2" id="text14" style="width: 400px" type="text">
                        <input type="radio" name="rad14" id="rad141" style="margin-left: 20px" value="Yes"><label for="rad141" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad14" id="rad142" style="margin-left: 20px" value="No"><label for="rad142" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">15 All mounting bolts are in good condition</label>
                        <input class="text2" id="text15" style="width: 400px" type="text">
                        <input type="radio" name="rad15" id="rad151" style="margin-left: 20px" value="Yes"><label for="rad151" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad15" id="rad152" style="margin-left: 20px" value="No"><label for="rad152" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">16 Hydraulic system is free of leaks</label>
                        <input class="text2" id="text16" style="width: 400px" type="text">
                        <input type="radio" name="rad16" id="rad161" style="margin-left: 20px" value="Yes"><label for="rad161" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad16" id="rad162" style="margin-left: 20px" value="No"><label for="rad162" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">17 Boom sections are free of cracks or dents</label>
                        <input class="text2" id="text17" style="width: 400px" type="text">
                        <input type="radio" name="rad17" id="rad171" style="margin-left: 20px" value="Yes"><label for="rad171" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad17" id="rad172" style="margin-left: 20px" value="No"><label for="rad172" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">18 Main and auxiliary wire ropes are well lubricated and that there are no visible defects such as broken wires, kinks</label>
                        <input class="text2" id="text18" style="width: 400px" type="text">
                        <input type="radio" name="rad18" id="rad181" style="margin-left: 20px" value="Yes"><label for="rad181" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad18" id="rad182" style="margin-left: 20px" value="No"><label for="rad182" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">19 Winches, pulleys and wire ropes are in good working condition</label>
                        <input class="text2" id="text19" style="width: 400px" type="text">
                        <input type="radio" name="rad19" id="rad191" style="margin-left: 20px" value="Yes"><label for="rad191" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad19" id="rad192" style="margin-left: 20px" value="No"><label for="rad192" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">20 Crane hook is provided with a safety catch to prevent displacement of the sling or load from the hook</label>
                        <input class="text2" id="text20" style="width: 400px" type="text">
                        <input type="radio" name="rad20" id="rad201" style="margin-left: 20px" value="Yes"><label for="rad201" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad20" id="rad202" style="margin-left: 20px" value="No"><label for="rad202" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <br>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">D. Safety and Operational Devices</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">21 Load radius indicator with warning alarm is installed</label>
                        <input class="text2" id="text21" style="width: 400px" type="text">
                        <input type="radio" name="rad21" id="rad211" style="margin-left: 20px" value="Yes"><label for="rad211" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad21" id="rad212" style="margin-left: 20px" value="No"><label for="rad212" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">22 Jib angle indicator is provided (For Luffing Jib Tower Crane)</label>
                        <input class="text2" id="text22" style="width: 400px" type="text">
                        <input type="radio" name="rad22" id="rad221" style="margin-left: 20px" value="Yes"><label for="rad221" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad22" id="rad222" style="margin-left: 20px" value="No"><label for="rad222" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">23 Emergency stop button, which will terminate the operation of the crane engine, is installed in the operator</label>
                        <input class="text2" id="text23" style="width: 400px" type="text">
                        <input type="radio" name="rad23" id="rad231" style="margin-left: 20px" value="Yes"><label for="rad231" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad23" id="rad232" style="margin-left: 20px" value="No"><label for="rad232" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">24 Effective braking mechanisms for the following is maintained:</label>
                        <input class="text2" id="text24" style="width: 400px" type="text">
                        <input type="radio" name="rad24" id="rad241" style="margin-left: 20px" value="Yes"><label for="rad241" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad24" id="rad242" style="margin-left: 20px" value="No"><label for="rad242" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(a) Hoisting</label>
                        <input class="text2" id="texta" style="width: 400px" type="text">
                        <input type="radio" name="rada" id="rada1" style="margin-left: 20px" value="Yes"><label for="rada1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rada" id="rada2" style="margin-left: 20px" value="No"><label for="rada2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(b) Derricking</label>
                        <input class="text2" id="textb" style="width: 400px" type="text">
                        <input type="radio" name="radb" id="radb1" style="margin-left: 20px" value="Yes"><label for="radb1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="radb" id="radb2" style="margin-left: 20px" value="No"><label for="radb2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(c) Slewing</label>
                        <input class="text2" id="textc" style="width: 400px" type="text">
                        <input type="radio" name="radc" id="radc1" style="margin-left: 20px" value="Yes"><label for="radc1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="radc" id="radc2" style="margin-left: 20px" value="No"><label for="radc2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="margin-left: 50px; font-size: 20px; width: 36%">(d) Trolley Travelling</label>
                        <input class="text2" id="textd" style="width: 400px" type="text">
                        <input type="radio" name="radd" id="radd1" style="margin-left: 20px" value="Yes"><label for="radd1" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="radd" id="radd2" style="margin-left: 20px" value="No"><label for="radd2" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">25 Hoisting Limiter to prevent over-hoisting of the hook block is functional</label>
                        <input class="text2" id="text25" style="width: 400px" type="text">
                        <input type="radio" name="rad25" id="rad251" style="margin-left: 20px" value="Yes"><label for="rad251" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad25" id="rad252" style="margin-left: 20px" value="No"><label for="rad252" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">26 Trolley Travelling Limiter to prevent over-travelling of trolley is functional</label>
                        <input class="text2" id="text26" style="width: 400px" type="text">
                        <input type="radio" name="rad26" id="rad261" style="margin-left: 20px" value="Yes"><label for="rad261" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad26" id="rad262" style="margin-left: 20px" value="No"><label for="rad262" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">27 Limit switches to prevent over-derricking and over-lowering of jib (For Luffing Jib Tower Crane) is functional</label>
                        <input class="text2" id="text27" style="width: 400px" type="text">
                        <input type="radio" name="rad27" id="rad271" style="margin-left: 20px" value="Yes"><label for="rad271" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad27" id="rad272" style="margin-left: 20px" value="No"><label for="rad272" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">28 Slewing limiter to restrict slewing of crane is functional</label>
                        <input class="text2" id="text28" style="width: 400px" type="text">
                        <input type="radio" name="rad28" id="rad281" style="margin-left: 20px" value="Yes"><label for="rad281" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad28" id="rad282" style="margin-left: 20px" value="No"><label for="rad282" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">29 Wind anemometer is installed and is in good working condition</label>
                        <input class="text2" id="text29" style="width: 400px" type="text">
                        <input type="radio" name="rad29" id="rad291" style="margin-left: 20px" value="Yes"><label for="rad291" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad29" id="rad292" style="margin-left: 20px" value="No"><label for="rad292" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">30 Adequate aircraft warning lights and/or chequered white and red flags are provided</label>
                        <input class="text2" id="text30" style="width: 400px" type="text">
                        <input type="radio" name="rad30" id="rad301" style="margin-left: 20px" value="Yes"><label for="rad301" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad30" id="rad302" style="margin-left: 20px" value="No"><label for="rad302" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">31 Anti-collision devices are tested to stop the tower crane's operation such that the crane-to-crane interference must be</label>
                        <input class="text2" id="text31" style="width: 400px" type="text">
                        <input type="radio" name="rad31" id="rad311" style="margin-left: 20px" value="Yes"><label for="rad311" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad31" id="rad312" style="margin-left: 20px" value="No"><label for="rad312" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">32 Overload limiter to prevent overloading of crane is functional</label>
                        <input class="text2" id="text32" style="width: 400px" type="text">
                        <input type="radio" name="rad32" id="rad321" style="margin-left: 20px" value="Yes"><label for="rad321" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad32" id="rad322" style="margin-left: 20px" value="No"><label for="rad322" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <br>
                <label style="margin: 0 20px 5px 40px; color: #072941; font-family: 'Times New Roman'; font-size: 25px; font-weight: bold">E. Counter Weight</label>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">33 Counter jib (Condition)</label>
                        <input class="text2" id="text33" style="width: 400px" type="text">
                        <input type="radio" name="rad33" id="rad331" style="margin-left: 20px" value="Yes"><label for="rad331" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad33" id="rad332" style="margin-left: 20px" value="No"><label for="rad332" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">34 Counter Balance (How much weight)</label>
                        <input class="text2" id="text34" style="width: 400px" type="text">
                        <input type="radio" name="rad34" id="rad341" style="margin-left: 20px" value="Yes"><label for="rad341" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad34" id="rad342" style="margin-left: 20px" value="No"><label for="rad342" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
                    </div>
                </div>
                <div style="margin: 10px 20px 10px 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1270px">
                    <div style="padding: 10px; background-color: rgba(240,248,248,0.05)">
                        <label class="lab" style="font-size: 20px; width: 40%">35 Maintenance work on the Tower Crane is carried out by Competent Persons</label>
                        <input class="text2" id="text35" style="width: 400px" type="text">
                        <input type="radio" name="rad35" id="rad351" style="margin-left: 20px" value="Yes"><label for="rad351" style="color: #0b3756; font-size: 17px; margin-left: 5px">Yes</label>
                        <input type="radio" name="rad35" id="rad352" style="margin-left: 20px" value="No"><label for="rad352" style="color: #0b3756; font-size: 17px; margin-left: 5px">No</label>
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
