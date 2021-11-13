<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
use App\Models\Testvisualmpi;
use App\Models\Testvisualmpiitem;
use Illuminate\Http\Request;

class TestmpiController extends Controller{
    public function showTVM(){
        $clients = Client::all();
        return view('employee.test.testmpi.TMVMNew',['clients' => $clients]);
    }
    public function insertTVMNew(Request $request){
        $tv = new Testvisualmpi();
        $tv->Name_C = $request->client;
        $tv->Address = $request->address;
        $tv->ID_WO = $request->work;
        $tv->Report_num = $request->report;
        $tv->Date_Report = $request->date;
        $tv->Date_TE = $request->dateTE;
        $tv->Date_MK = $request->dateMIK;
        $tv->Type_TV = $request->extype;
        $tv->SAFE_OP = $request->issafe;
        if($request->unit === "Unit"){
            $tv->UNIT_TB = $request->testedby;
            $tv->UNIT_CN = $request->cerno;
            $tv->UNIT_TD = $request->testdate;
        } else{
            $tv->SLING_TB = $request->testedby;
            $tv->SLING_CN = $request->cerno;
            $tv->SLING_TD = $request->testdate;
        }
        $tv->Name_per_mrep = $request->npmr;
        $tv->Name_per_arep = $request->npar;
        $tv->Latest_date1 = $request->LNT;
        $tv->Name_add_emp = $request->nae;
        $tv->Standard_M = $request->standard;
        $tv->E_type = $request->eqitype;
        $tv->C_Media = $request->contmedia;
        $tv->TPN_M = $request->testproc;
        $tv->P_Spacing = $request->po;
        $tv->Indicator_M = $request->indicator;
        $tv->Inspector_M = $request->inspector;
        $tv->Qualification_M = $request->qual;
        $tv->save();
        $cer = new Cetificate();
        $cer->Name_C = $request->client;
        $cer->ID_WO = $request->work;
        $cer->Report_num = $request->report;
        $cer->Report_Type = "Test Visual/MPI";
        $cer->save();
        return redirect()->back();
    }

    public function searchTM(Request $request){
        if ($request->quote === "empty") {
            $c = Testvisualmpi::all();
        } else {
            if ($request->searchType === "report") {
                $c = Testvisualmpi::where('Report_num', $request->quote)->get();

            } else if ($request->searchType === "idno") {
                $c = Testvisualmpi::all();
            } else if ($request->searchType === "rn") {
                $c = Testvisualmpi::all();
            }
        }
        return response()->json($c);
}
    public function editTM(Request $request){
        if ($request->id !== ""){
            $tv = Testvisualmpi::where('_id', $request->id)->first();
            if ($tv !== null){
                $tv->Address = $request->address;
                $tv->ID_WO = $request->work;
                $tv->Report_num = $request->report;
                $tv->Date_Report = $request->date;
                $tv->Date_TE = $request->dateTE;
                $tv->Date_MK = $request->dateMIK;
                $tv->Type_TV = $request->extype;
                $tv->SAFE_OP = $request->issafe;
                if($request->unit === "Unit"){
                    $tv->UNIT_TB = $request->testedby;
                    $tv->UNIT_CN = $request->cerno;
                    $tv->UNIT_TD = $request->testdate;
                } else{
                    $tv->SLING_TB = $request->testedby;
                    $tv->SLING_CN = $request->cerno;
                    $tv->SLING_TD = $request->testdate;
                }
                $tv->Name_per_mrep = $request->npmr;
                $tv->Name_per_arep = $request->npar;
                $tv->Latest_date1 = $request->LNT;
                $tv->Name_add_emp = $request->nae;
                $tv->Standard_M = $request->standard;
                $tv->E_type = $request->eqitype;
                $tv->C_Media = $request->contmedia;
                $tv->TPN_M = $request->testproc;
                $tv->P_Spacing = $request->po;
                $tv->Indicator_M = $request->indicator;
                $tv->Inspector_M = $request->inspector;
                $tv->Qualification_M = $request->qual;
                $tv->save();
                $cer =  Cetificate::where('CERT_NO', $request->cert)->first();
                $cer->Name_C = $request->client;
                $cer->ID_WO = $request->work;
                $cer->Report_num = $request->report;
                $cer->Report_Type = "Test Visual/MPI";
                $cer->save();
            }
        }
        return redirect()->back();
    }
    ##############################desc################
    public function searchTMD(Request $request){
        if ($request->searchType === "search"){
            if ($request->quote === "empty"){
                $c = Testvisualmpi::all();
            } else{
                $c = Testvisualmpi::where('Report_num', $request->quote)->get();
            }
        } else{
            if ($request->quote === "empty"){
                $c = Testvisualmpiitem::all();
            } else{
                $c = Testvisualmpiitem::where('Report_num', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function insertTMD(Request $request){
        $t = Testvisualmpiitem::where('_id', $request->id)->first();
        if ( $t === null){
            $t = new Testvisualmpiitem();
            $t->Name_C = $request->client;
            $t->ID_WO = $request->work;
            $t->Report_num = $request->repNo;
            $t->ID_NUM = $request->idNumber;
            $t->QTY = $request->qty;
            $t->Description = $request->description;
            $t->Safe_WL = $request->safe;
            $t->Proof_load = $request->pl;
            $t->save();
        }
        return redirect()->back();
    }
    public function editTMD(Request $request){
        $t = Testvisualmpiitem::where('_id', $request->id)->first();
        if ( $t !== null){
            $t->ID_NUM = $request->idNumber;
            $t->QTY = $request->qty;
            $t->Description = $request->description;
            $t->Safe_WL = $request->safe;
            $t->Proof_load = $request->pl;
            $t->save();
        }
        return redirect()->back();
    }
    public function deleteTMD(Request $request){
        $t = Testvisualmpiitem::where('_id', $request->id)->first();
        if ($t !== null){
            $t->delete();
        }
        return redirect()->back();
    }
}
