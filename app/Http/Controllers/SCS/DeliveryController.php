<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Deliverynote;
use App\Models\Deliverynoteitem;
use App\Models\Workorder;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function showDNote(){
        $clients = Client::all();
        return view('employee.delivery.dNoteNew',['clients' => $clients]);
    }
    public function insertDNote(Request $request){

        $dNote = new Deliverynote();
        $dNote->Name_C = $request->client;
        $dNote->ID_WO = $request->wid;
        $dNote->ID_DN = $request->dnote;
        $dNote->Delivery_Date = $request->date;
        $dNote->Delivery_Date1 = $request->date;
        $dNote->P_O = $request->po;
        $dNote->REQ_NO = $request->req;
        $dNote->save();
        return redirect()->back();
    }
    public function dynamicDP(Request $request){
        $wo = Workorder::where('Name_C', '=', $request->client)->get();
        return response()->json($wo);
    }
    public function dnID(Request $request){
        $Quot = Workorder::where('ID_WO', $request->work)->first();
        $dnId = 'DN'.$Quot->ID_QUO;
        $dn = '';
        for ($i=0 ; $i < strlen($dnId) ; $i++){
            if ( ctype_digit($dnId[$i]) ) {
                break;
            }else{
                $dn .= $dnId[$i];
            }
        }
        $d = Deliverynote::where('ID_WO', $request->work)->orderBy('_id', 'desc')->first();
        $dnote = $dn;
        if ($d === null){
            $dn .= '1';
        }
        else{
            if ($d !== null){
                $num =intval(substr($d->ID_DN,strlen($dn),strlen($d->ID_DN)));
                $num++;
                $dn .= strval($num);
            }
            $temp = $dnote;
            while (Deliverynote::where('ID_DN', '=',$dn)->first() !== null){
                $num =intval(substr($dn,strlen($temp),strlen($dn)));
                $num++;
                $dnote = $temp;
                $dnote .= strval($num);
                $dn = $dnote;
            }
        }
        return response()->json($dn);
    }
    public function searchDN(Request $request)
    {
        if ($request->quote === "empty") {
            $c = Deliverynote::all();
        } else {
            if ($request->searchType === "delivery"){
                $c = Deliverynote::where('ID_DN', $request->quote)->get();

            } else if ($request->searchType === "work") {
                $c = Deliverynote::where('ID_WO', $request->quote)->get();
            } else {
                $c = Deliverynote::where('Name_C', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function editDN(Request $request)
    {
        if ($request->id !== "") {
            $comp = Deliverynote::where('_id', $request->id)->first();
            if ($comp !== null) {
                $comp->Name_C = $request->client;
                $comp->ID_WO = $request->wid;
                $comp->ID_DN = $request->dnote;
                $comp->Delivery_Date = $request->date;
                $comp->P_O = $request->po;
                $comp->REQ_NO = $request->req;

                $comp->save();
            }
        }
        return redirect()->back();
    }
    ###########desc##########################
    public function searchDD(Request $request)
    {
        if ($request->quote === "empty" && $request->searchType === "delivery") {
            $c = Deliverynote::all();
        } else  if ($request->quote === "empty" && $request->searchType === "editdel") {
            $c = Deliverynoteitem::all();
        }
        else {
            if ($request->searchType === "delivery"){
                $c = Deliverynote::where('ID_DN', $request->quote)->get();
            } else if ($request->searchType === "editdel") {
                $c = Deliverynoteitem::where('ID_WO', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function deleteDDes(Request $request)
    {
        $c = Deliverynoteitem::where('_id', $request->id);
        if ($c !== null){
            $c->delete();
        }
        return redirect()->back();
    }
    public function insertDDes(Request $request)
    {
        $t = Deliverynoteitem::where('_id', $request->id);
        if ($t === null){
            $c = new Deliverynoteitem();
            $c->ID_DN = $request->delivery;
            $c->Name_C = $request->work;
            $c->ID_WO = $request->client;
            $c->Description = $request->description;
            $c->QTY = $request->qty;
            $c->ID_NUM = $request->idno;
        }
    return redirect()->back();
    }







}
