@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 700px; z-index: 20; height: 780px; width: 900px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Client</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div onclick="location.href='page';" class="lab tab">
                    <a>New Client</a>
                </div>
                <div class="lab tabSelected" style="width: 200px; cursor: default">
                    <a>Add Contact Person</a>
                </div>
            </nav>
            <br><br><br><br>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 850px" method="POST">
                @csrf
                <div style="padding: 15px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <br><br>
                    <label class="lab" style="width: 200px">Name:</label> <input name="nameCp" class="text1" style="width: 400px" type="text" placeholder="Enter the name"> <span class="sp"><a
                            href="#">Search</a></span> <span class="sp"><a
                            href="#">Search Contact</a></span> <br>
                    <label class="lab" style="width: 200px">Contact Person:</label> <input name="cp" class="text1" style="width: 400px" type="text" placeholder="Enter the contact"> <span class="sp"><a
                            href="#">Search</a></span> <br>
                    <br>
                </div>
                <br>
                <div style="margin-left: 280px">
                    <button class="bttn" type="submit" onclick="get_action1(this.form)">Delete</button>
                    <button class="bttn" type="submit" onclick="get_action2(this.form)">Edit</button>
                    <button class="bttn" type="submit" onclick="get_action3(this.form)">Insert</button>
                </div>
                <br>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>
        function get_action1(form) {
            form.action = "{{route('deleteCont')}}";
        }
        function get_action2(form) {
            form.action = "{{route('editClient')}}";
        }
        function get_action3(form) {
            form.action = "{{route('contactPerson')}}";
        }
    </script>
@stop
