<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
use App\Models\Testvisual;
use App\Models\Testvisualitem;
use Illuminate\Http\Request;


class TestvController extends Controller{

    public function showTVN(){
        $clients = Client::all();
        return view('employee.test.testvisual.TVNew',['clients' => $clients, 'posts' => ""]);
    }
    public function showTVD(){
        return view('employee.test.testvisual.TVDes',['t' => "", 'posts' => ""]);
    }

    public function insertTVNew(Request $request){
        $tv = new Testvisual();
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
        $tv->save();
        $cer = new Cetificate();
        $cer->Name_C = $request->client;
        $cer->ID_WO = $request->work;
        $cer->Report_num = $request->report;
        $cer->Report_Type = "Test Visual";
        $cer->save();
        return redirect()->back();
    }
    public function searchTV()
    {
        $searchType = (isset(\request()->searchType)&& \request()->searchType != '')? \request()->searchType :null;
        $repNo = (isset(\request()->repNo)&& \request()->repNo != '')? \request()->repNo :null;
        if ($searchType === "repno") {
            if ($repNo !== null){
                $c = Testvisual::where('Report_num', $repNo)->paginate(10);
            } else {
                $c = Testvisual::paginate(10);
            }
        } else{
            $c = Testvisual::paginate(10);
        }
        $clients = Client::all();
        return view('employee.test.testmpi.TMVMNew',['clients' => $clients, 'posts' =>$c]);
    }
    public function editTV(Request $request){
        if ($request->id !== ""){
            $tv = Testvisual::where('_id', $request->id)->first();
            if ($tv !== null){
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
                $tv->save();
                $cer =  Cetificate::where('CERT_NO', $request->cert)->first();
                $cer->Name_C = $request->client;
                $cer->ID_WO = $request->work;
                $cer->Report_num = $request->report;
                $cer->Report_Type = "Test Visual";
                $cer->save();
            }
        }
        return redirect()->back();
    }
    ################desc######################
    public function searchTVD(Request $request){
        if ($request->searchType === "search"){
            if ($request->report === "empty"){
                $c = Testvisual::paginate(10);
            } else{
                $c = Testvisual::where('Report_num', $request->report)->paginate(10);
            }
        } else{
            if ($request->report === "empty"){
                $c = Testvisualitem::paginate(10);
            } else{
                $c = Testvisualitem::where('Report_num', $request->report)->paginate(10);
            }
        }
        return view('employee.test.testvisual.TVDes',['t' => $request->searchType, 'posts' =>$c]);
    }
    public function insertTVD(Request $request){
        $t = Testvisualitem::where('_id', $request->id)->first();
        if ( $t === null){
            $t = new Testvisualitem();
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
    public function editTVD(Request $request){
        $t = Testvisualitem::where('_id', $request->id)->first();
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
    public function deleteTVD(Request $request){
        $t = Testvisualitem::where('_id', $request->id)->first();
        if ($t !== null){
            $t->delete();
        }
        return redirect()->back();
    }
}
