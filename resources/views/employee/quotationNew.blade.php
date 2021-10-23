@extends('layouts.employeepage')
@section('content_1')

    <div style="border-radius: 20px; border: rgba(15,70,108,0.66); box-shadow: 0 0 5px 5px gainsboro; position: fixed; margin-top: 80px; margin-left: 400px; z-index: 20; height: 780px; width: 1300px; background-color: rgba(240,248,248,0.57)">
        <fieldset>
            <legend style="padding: 10px; color: #0b3756; font-family: 'Times New Roman'; font-size: 35px; font-weight: bold">Quotation</legend>
            <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39); padding: unset" class="navbar navbar-expand-lg navbar-light bg-white">
                <div  class="lab tabSelected" style="cursor: default">
                    <a>New</a>
                </div>
                <div onclick="location.href='quoted';" class="lab tab">
                    <a>Description</a>
                </div>
                <div onclick="location.href='quotep';" class="lab tab">
                    <a>Print</a>
                </div>
            </nav>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1250px" method="POST">
                @csrf
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label> <input name="name" class="text2" style="width: 400px" type="text" value="{{ old('name') }}">
                    @error('name')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Contact:</label> <input name="contact" class="text2" style="width: 400px" type="text"></span>
                    @error('contact')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label> <input name="quot" id="qid" class="text2" style="width: 400px" type="text" value="{{Session::get('quotation')}}">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Enquiry:</label> <input name="enquiry" class="text2" style="width: 400px" type="text"></span>
                    @error('enquiry')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">Currency:</label> <input name="currency" class="text2" style="width: 400px" type="text">
                    @error('currency')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date:</label> <input name="date" class="text2" style="width: 400px" type="date"></span>
                    @error('date')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">Delivery Time:</label> <input name="delivery" class="text2" style="width: 400px" >
                    @error('delivery')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Transportation:</label> <input name="transportation" class="text2" style="width: 400px" type="text"></span>
                    @error('transportation')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">VAT:</label> <input name="vat" class="text2" style="width: 400px" >
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Validity:</label> <input name="validity" class="text2" style="width: 400px" type="text"></span>
                    <br><br>
                    <div style="margin-left: 490px">
                        <button class="bttn" onclick="get_action1(this.form)">Edit</button>
                        <button class="bttn" onclick="get_action2(this.form)">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1100px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Quotation:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Date:</label> <input class="Date text2" style="width: 300px" type="text" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input class="Date text2" style="width: 300px" type="text" ></span> <span class="sp"><a
                            href="#">Search</a></span><br>
                </div>
            </form>
        </fieldset>
    </div>
@stop
@section('scripts')
    <script>

        function get_action1(form) {
            form.action = "{{route('editQuote')}}";
        }
        function get_action2(form) {
            document.getElementById("qid").value = '';
            form.action = "{{route('insertQuote')}}";
        }
    </script>
@stop
