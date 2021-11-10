<?php

namespace App\Http\Controllers\SCS;


use App\Models\Client;
use App\Models\Cp;
use App\Models\Qitem;
use App\Models\Quotation;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class QuoteController extends Controller{
    //to show the view
    public function showQuotPage(){
        $clients = Client::all();
        return view('employee.quotation.quotationNew',['quotation'=>'', 'clients' => $clients]);
    }

    public function getRules(){
        $rules = [
            'client' => 'required|max:100',
            'contact' => 'required|max:100',
            'enquiry' => 'required|max:100',
            'currency' => 'required|max:100',
            'delivery' => 'required|max:100',
            'transportation' => 'required|max:100',
        ];
        return $rules;
    }
    public function getMessage()
    {
        $msg = 'required';
        $msg1 = 'exceeded the limits';
        $messages = [
            'client.required' => $msg,
            'contact.required' => $msg,
            'enquiry.required' => $msg,
            'currency.required' => $msg,
            'delivery.required' => $msg,
            'transportation.required' => $msg,
            'name.max' => $msg1,
            'contact.max' => $msg1,
            'quot.max' => $msg1,
            'enquiry.max' => $msg1,
            'currency.max' => $msg1,
            'delivery.max' => $msg1,
            'transportation.max' => $msg1
        ];
        return $messages;
    }
    //new Quotation
    public function insertQuote(Request $request){
//        $validator = Validator::make($request->all(), $this->getRules(), $this->getMessage());
//        if ($validator->fails()){
//            return redirect()->back()->withErrors($validator)->withInputs($request->all());
//        }
        $quot = new Quotation();
        $quot->ID_QUO = $request->quot;
        $quot->Name_C = $request->client;
        $quot->C_P = $request->contact;
        $quot->Enquiry = $request->enquiry;
        $quot->Currency_QUO = $request->currency;
        $quot->Date_QUO1 = $request->date;
        $quot->Transportation_QUO = $request->transportation;
        $quot->Delivery_Time = $request->delivery;
        $quot->VALIDITY_QUO = $request->validity;
        $quot->Vat = $request->vat;
        $quot->save();
        return redirect()->back();
    }
    public function findCP(Request $request)
    {
        $cp = Cp::where('Name_C', '=', $request->client)->get();

        $id = $request->client;
        $quotId = 'Q';
        if (str_word_count($id) == 1){
            $quotId .= strtoupper(substr($id,0,3));
        }
        else if (str_word_count($id) == 2){
            $arr = explode(' ',trim($id));
            $quotId .= strtoupper(substr($arr[0],0,2). substr($arr[1],0,2));
        }
        else{
            $arr = explode(' ',trim($id));
            for ($i = 0; $i<str_word_count($id);$i++){
                $quotId .= strtoupper(substr($arr[$i],0,1));
            }
        }
        $q = Quotation::where('Name_C', '=',$request->client)->orderBy('_id', 'desc')->first();
        $quot = $quotId;
        if ($q === null){
            $quotId .= '1';
        }
        else{
            if ($q !== null){
                $num =intval(substr($q->ID_QUO,strlen($quotId),strlen($q->ID_QUO)));
                $num++;
                $quotId .= strval($num);
            }
            $temp = $quot;
            if (Quotation::where('ID_QUO', '=',$quotId)->first() !== null){
                $num =intval(substr($quotId,strlen($temp),strlen($quotId)));
                $num++;
                $quot = $temp;
                $quot .= strval($num);
                $quotId = $quot;
            }
        }
        return response()->json([
            'cp'=>$cp,
            'quotId'=>$quotId
            ]);
    }
    public function editQuote(Request $request){
        $quot = Quotation::where('_id',$request->id)->first();
        if ($quot !== null) {
            $quot->ID_QUO = $request->quot;
            $quot->Name_C = $request->name;
            $quot->C_P = $request->contact;
            $quot->Enquiry = $request->enquiry;
            $quot->Currency_QUO = $request->currency;
            $quot->Date_QUO1 = $request->date;
            $quot->Transportation_QUO = $request->transportation;
            $quot->Delivery_Time = $request->delivery;
            $quot->VALIDITY_QUO = $request->validity;
            $quot->Vat = $request->vat;
            $quot->save();
        }
        return redirect()->back();
    }
    public function searchQ(Request $request)
    {
        if ($request->quote === "empty") {
            $c = Quotation::all();
        } else{
            if ($request->searchType === "quote") {
                $c = Quotation::where('ID_QUO', $request->quote)->get();
            } else if ($request->searchType === "client") {
                $c = Quotation::where('Name_C', $request->quote)->get();
            } else {
                $c = Quotation::where([
                        ['Date_QUO1', '>', $request->quote],
                        ['Date_QUO1', '<', $request->date]
                    ]
                )->get();
            }
    }
        return response()->json($c);
    }

    #############Quotation Description##############################################
    //Quotation
    public function insertQD(Request $request){
        $quot = new Qitem();
        $quot->ID_QUO = $request->quotation;
        $quot->Name_C = $request->client;
        $quot->Description = $request->description;
        $quot->Price_QUO = $request->unitPrice;
        $quot->QTY = $request->qty;
        $quot->Type_QUO = $request->type;
        $quot->Total_Price = $request->ttlPrice;
        $quot->save();
        return redirect('quoted');
    }
    public function searchQuote(Request $request){

       /* $clients =Client::where('Name_C',$request->name)->first();
        return view('page',['clients'=>$clients]);*/
    }
    ##################des###################333
    public function deleteQD(Request $request){

    }
    public function editQD(Request $request){

    }




}
