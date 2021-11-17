<?php

namespace App\Http\Controllers\SCS;

use App\Models\Client;
use App\Models\Cp;
use App\Models\Quotation;
use App\Models\Woitem;
use App\Models\Workorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WorkController extends Controller {

    public function showWorkNew(){
        $clients = Client::all();
        return view('employee.work.workNew',['clients'=>$clients, 'posts' => ""]);
    }
    public function showWorkDes(){
        return view('employee.work.workDes');
    }

    public function insertWD(Request $request){
        $this->validate($request,[

        ]);
        $quot = new Woitem();
            $quot->Name_C = $request->client;
            $quot->ID_WO = $request->work;
            $quot->ID_NUM = $request->idN;
            $quot->Description = $request->description;
            $quot->save();

        return redirect()->back();

    }
    public function insertWN(Request $request){
            $this->validate($request,[
                'client' => 'required',
                'quotation' => 'required',
                'workOrder' => 'required',
                'C_P' => 'required'
            ]);
            $quot = new Workorder();
            if(Workorder::where('ID_QUO', '=',$request->quotation)->first() === null){
                $quot->Name_C = $request->client;
                $quot->ID_QUO = $request->quotation;
                $quot->ID_WO = $request->workOrder;
                $quot->C_P = $request->contperson;
                $quot->P_O = $request->po;
                $quot->Fax_C = $request->fax;
                $quot->Currency_WO = $request->currency;
                $quot->Date_WO = $request->date;
                //$quot->Date_WO1 = $request->delivery;
                $quot->Delivery_Date = $request->delivery;
                $quot->VALIDITY_WO = $request->valedity;
                $quot->Note_WO = $request->note;
                $quot->save();
            }
            return redirect()->back();

           // $quot->Case_WO = $request->type;


    }
    public function findQ(Request $request)
    {
        $Quot = Quotation::where('Name_C', $request->client)->get();
        return response()->json($Quot);
    }
    public function findCQ(Request $request)
    {
        $Quot = Quotation::where('ID_QUO', $request->quotation)->first();
        $workId = 'W'.$request->quotation;
        $wo = '';
        for ($i=0 ; $i < strlen($workId) ; $i++){
            if ( ctype_digit($workId[$i]) ) {
                break;
            }else{
                $wo .= $workId[$i];
            }
        }
        $i = $Quot->Name_C;
        $w = Workorder::where('Name_C', '=',$i)->orderBy('_id', 'desc')->first();
        if ($w === null){
            $wo .= '1';
        }
        else{
            if ($w !== null){
                $num =intval(substr($w->ID_WO,strlen($wo),strlen($w->ID_WO)));
                $num++;
                $wo .= strval($num);
            }
        }
        return response()->json([
            'wo'=>$wo,
            'q'=>$Quot
            ]);
    }
    public function searchW(Request $request){
        $searchType = (isset(\request()->searchType)&& \request()->searchType != '')? \request()->searchType :null;
        $work = (isset(\request()->work)&& \request()->work != '')? \request()->work :null;
        $client = (isset(\request()->client)&& \request()->client != '')? \request()->client :null;
        $quote = (isset(\request()->quote)&& \request()->quote != '')? \request()->quote :null;

        if ($searchType === "work"){
            if ($work === null ){
                $c = Workorder::paginate(10);
            } else{
                $c = Workorder::where('ID_WO', $work)->paginate(10);
            }
        } else if ($searchType === "quote") {
            if ($quote === null ){
                $c = Workorder::paginate(10);
            } else{
                $c = Qitem::where('ID_QUO', $quote)->paginate(10);
            }
        } else{
            if ($client === null ){
                $c = Workorder::paginate(10);
            } else{
                $c = Qitem::where('Name_C', $client)->paginate(10);
            }
        }
        $clients = Client::all();
        return view('employee.work.workNew',['clients'=>$clients, 'posts' => $c]);//        if ($request->quote === "empty") {
//            $c = Workorder::all();
//        } else{
//            if ($request->searchType === "work") {
//                $c = Workorder::where('ID_WO', $request->quote)->get();
//            } else if ($request->searchType === "client") {
//                $c = Workorder::where('Name_C', $request->quote)->get();
//            } else if ($request->searchType === "quote") {
//                $c = Workorder::where('ID_QUO', $request->quote)->get();
//            }
//        }
//        return response()->json($c);

    }

    public function editWN(Request $request){
        $quot = Workorder::where('_id',$request->id)->first();
        if ($quot !== null) {
            $quot->ID_QUO = $request->quot;
            $quot->Name_C = $request->name;
            $quot->C_P = $request->contact;
            $quot->ID_WO = $request->work;
            $quot->Currency_QUO = $request->currency;
            $quot->Date_WO = $request->date;
            $quot->P_O = $request->po;
            $quot->Delivery_Time = $request->delivery;
            $quot->VALIDITY_QUO = $request->validity;
            $quot->Fax_C = $request->fax;
            $quot->Note_WO = $request->note;
            $quot->save();
        }
        return redirect()->back();
    }
    ####################DES###################
    public function editWD(Request $request){
        $w = Woitem::where('_id', $request->id)->first();
        if ($w !== null){
//            $w->Name_C = $request->client;
//            $w->ID_WO = $request->work;
            $w->ID_NUM = $request->idN;
            $w->Description = $request->description;
        }
        return redirect()->back();
    }
    public function deleteWD(Request $request){
        $w = Woitem::where('_id', $request->id)->first();
        if ($w !== null){
            $w->delete();
        }
        return redirect()->back();
    }
    public function searchWD(Request $request){
        $t = array();
        if ($request->searchType === "work"){
            if ($request->quote === "empty"){
                $c = Workorder::all();
            } else{
                $c = Workorder::where('ID_WO', $request->quote)->get();
            }
            $t = $c;
        } else if ($request->searchType === "quote"){
            if ($request->quote === "empty"){
                $c = Workorder::all();
            } else{
                $c = Workorder::where('Name_C', $request->quote)->get();
                foreach ($c as $cs){
                    if ($cs->Case_WO === "Open"){
                        $tt = array();
                        array_push($tt, $cs);
                        array_push($tt, Woitem::where('ID_WO', $cs->ID_WO)->first());
                        array_push($t, $tt);
                    }
                }
            }
        } else{
            if ($request->quote === "empty"){
                $c = Woitem::all();
            } else{
                $c = Woitem::where('ID_WO', $request->quote)->get();
            }
            $t = $c;
        }

        return response()->json($t);
    }
}
