<?php

namespace App\Http\Controllers\SCS;

use App\Models\Client;
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
            $quot = new Workorder();
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
           // $quot->Case_WO = $request->type;
            $quot->save();
            return redirect('workn');
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
