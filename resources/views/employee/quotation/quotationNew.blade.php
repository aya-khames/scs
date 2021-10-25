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
                    <label class="lab" style="font-size: 20px; width: 130px">Client:</label>
                    <a style="padding: unset">
                        <select id="clientname" name="client" class="miniDrop2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Client</option>
                            @foreach($clients as $client)
                                <option>{{$client->Name_C}}</option>
                            @endforeach
                        </select>
                    </a>
                    @error('name')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Contact:</label>
                    <a style="padding: unset">
                        <select id="contact" name="contact" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                            <option value="" disabled selected>Contact</option>--}}
                        </select>
                    </a>
                    @error('contact')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">Quotation:</label> <input name="quot" id="qid" class="text2" style="width: 400px" type="text" value="{{Session::get('quotation')}}">
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Enquiry:</label> <input name="enquiry" class="text2" style="width: 400px" type="text"></span>
                    @error('enquiry')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <label class="lab" style="font-size: 20px; width: 130px">Currency:</label>
                    <a style="padding: unset">
                        <select name="currency" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <option value="" disabled selected>Currency</option>
                            <option value="">LE</option>
                            <option value="">USD</option>
                            <option value="">EUR</option>
                            <option value="">GBP</option>
                        </select>
                    </a>
                    @error('currency')
                    <small class="from-text text-danger">{{$message}}</small>
                    @enderror
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Date:</label> <input name="date" class="text2" style="width: 195px" type="date"><input readonly class="text2" style="width: 195px" type="text"></span>
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
                    <label class="lab" style="font-size: 20px; width: 130px">VAT:</label>
                    <a style="padding: unset">
                        <select name="vat" class="miniDrop2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 300px">
                            <option value="" disabled selected>...</option>
                            <option value="">With Vat.</option>
                            <option value="">Without Vat.</option>
                        </select>
                    </a>
                    <input class="text2" type="text" disabled style="width: 70px"> %
                    <span><label class="lab" style="font-size: 20px; width: 130px; margin-left: 10px">Validity:</label> <input disabled name="validity" class="text2" style="width: 400px" type="text"></span>
                    <br><br>
                    <div style="margin-left: 490px">
                        <button class="bttn" type="submit" onclick="get_action1(this.form)">Edit</button>
                        <button class="bttn" type="submit" onclick="get_action2(this.form)">Insert</button>
                    </div>
                </div>
            </form>
            <form style="margin: 20px; box-shadow: 0 0 20px rgba(15,70,108,0.65); width: 1100px">
                <div style="padding: 20px; border-radius: 5px; background-color: rgba(240,248,248,0.05)">
                    <label class="lab" style="font-size: 20px; width: 100px">Quotation:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Client:</label> <input class="text2" style="width: 706px" type="text"> <span style="width: 80px" class="sp"><a
                            href="#">Search</a></span> <br>
                    <label class="lab" style="font-size: 20px; width: 100px">Date:</label> <input class="Date text2" style="width: 300px" type="date" ><span><label class="lab" style="font-size: 20px; width: 45px; margin-left: 45px">To:</label> <input class="Date text2" style="width: 300px" type="date" ></span> <span class="sp"><a
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
            console.log("check");
          //  document.getElementById("qid").value = '';
            form.action = "{{route('insertQuote')}}";
        }
        $('#clientname').change(function() {
            var client = $(this).val();
            if (client) {
                $.ajax({
                    type: "GET",
                    url: "{{route('findCP')}}",
                    data: {client: client},
                    success: function(res) {
                        if (res) {
                            $("#contact").empty();
                            $("#contact").append('<option>Select Contact Person</option>');
                            $.each(res, function(key, value) {
                                if (key == 'C_P'){
                                    $("#contact").append('<option value="' + value + '">' + value +
                                        '</option>');
                                }
                            });

                        } else {
                            $("#contact").empty();
                        }
                    }
                });
            } else {

                $("#address").empty();
            }
        });
    </script>
@stop
