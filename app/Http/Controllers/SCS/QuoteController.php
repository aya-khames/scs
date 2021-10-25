<?php

namespace App\Http\Controllers\SCS;


use App\Models\Qitem;
use App\Models\Quotation;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class QuoteController extends Controller{

    public function showQuotPage(){
        return view('employee.quotation.quotationNew',['quotation'=>'']);
        //return Redirect::to('quoten'. '');
    }

    public function getRules(){
        $rules = [
            'name' => 'required|max:100',
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
            'name.required' => $msg,
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
    public function insertQuote(Request $request){
        $validator = Validator::make($request->all(), $this->getRules(), $this->getMessage());
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $id = $request->name;
        $quotId = 'Q';
        if (str_word_count($id) == 1){
            $quotId = strtoupper(substr($id,0,3));
        }
        else if (str_word_count($id) == 2){
            $arr = explode(' ',trim($id));
            $quotId = strtoupper(substr($arr[0],0,2). substr($arr[1],0,2));
        }
        else{
            $arr = explode(' ',trim($id));
            for ($i = 0; $i<str_word_count($id);$i++){
                $quotId .= strtoupper(substr($arr[$i],0,1));
            }
        }
        $q = Quotation::where('Name_C',$request->name);

        if ($q === null){
            $quotId .= strval(1);

        }
       else{
           $id = $q->orderBy('_id', 'desc')->first();
           if ($id !== null){
               $num =intval(substr($id->ID_QUO,strlen($quotId),strlen($id->ID_QUO)));
               $num++;
               $quotId .= strval($num);
           }
        }
        //return $quotId;
        $quot = new Quotation();
        $quot->ID_QUO = $quotId;
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
        return redirect('quoten')->with('quotation',$quotId);
    }

    public function editQuote(Request $request){
        $validator = Validator::make($request->all(), $this->getRules(), $this->getMessage());
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $check = Quotation::where('ID_QUO',$request->quot)->first();
        if ($check !== null) {
            $quot = new Quotation();
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
        return redirect()->back()->withInputs($request->all());
    }
    #############Quotation Description##############################################
    public function insertQuotDes(Request $request){
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
    public function insertQD(Request $request){

    }




}
