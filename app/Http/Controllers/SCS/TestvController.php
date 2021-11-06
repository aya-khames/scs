<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
use App\Models\Testvisual;
use Illuminate\Http\Request;


class TestvController extends Controller{

    public function showTVN(){
        $clients = Client::all();
        return view('employee.test.testvisual.TVNew',['clients' => $clients]);
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

}
