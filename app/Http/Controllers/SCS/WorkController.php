<?php

namespace App\Http\Controllers\SCS;

use App\Models\Client;
use App\Models\Cp;
use App\Models\Quotation;
use App\Models\Workorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WorkController extends Controller {

    public function showWorkNew(){
        $clients = Client::all();
        return view('employee.work.workNew',['clients'=>$clients]);
    }
    public function showWorkDes(){
        return view('employee.work.workDes');
    }
    public function insertWN(Request $request){
            $this->validate($request,[

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

    public function editWN(){
        return view('employee.workDes');
    }
    public function editWD(){
        return view('employee.workDes');
    }
    public function insertWD(){
        return view('employee.workDes');
    }
    public function deleteWD(){
        return view('employee.workDes');
    }

}
