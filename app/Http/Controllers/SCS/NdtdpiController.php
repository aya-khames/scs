<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
use App\Models\Dpi;
use Illuminate\Http\Request;

class NdtdpiController extends Controller
{
    public function showNewDpi(){
        $clients = Client::all();
        return view('employee.ndt.dpi.DPINew',['clients' => $clients]);
    }
    public function getCert(Request $request){
        $dpi = Cetificate::where('ID_WO', $request->work)->first();

        $cert = ($request->work).'/';
        if($dpi === null){
            $cert .= '1';
        } else{
            $temp = $cert;
            $lastDpi = Cetificate::where('ID_WO', $dpi->ID_WO)->orderBy('Report_num', 'desc')->first();
            $num = intval(substr($lastDpi->Report_num, strlen($cert), strlen($lastDpi->Report_num)));
            $num++;
            $cert .= strval($num);
            while(Cetificate::where('Report_num', $cert)->first() !== null){
                $num = intval(substr($cert, strlen($temp), strlen($cert)));
                $num++;
                $cert = $temp.strval($num);
            }
        }
        return response()->json($cert);
    }
    public function insertDPINew(Request $request){
        $dpi = new Dpi();
        $dpi->Name_C = $request->client;
        $dpi->ID_WO = $request->work;
        $dpi->CERT_NO = $request->cert;
        $dpi->REQ_NO = $request->req;
        $dpi->DATE_C1 = $request->date;
        $dpi->DATE_INSP1 = $request->dateINSP;
        $dpi->LOCATION_C = $request->location;
        $dpi->Description_C = $request->description;
        $dpi->TEST_SPEC = $request->testSpec;
        $dpi->SURFACE_CON = $request->surface;
        $dpi->ACC_STAN = $request->accept;
        $dpi->MATERIAL_C = $request->material;
        $dpi->TEST_PN = $request->testno;
        $dpi->DYE_PEN = $request->dye;
        $dpi->INSPECTOR_C = $request->inspector;
        $dpi->save();
        $cer = new Cetificate();
        $cer->Name_C = $request->client;
        $cer->ID_WO = $request->work;
        $cer->Report_num = $request->cert;
        $cer->Report_Type = "NDT DPI";
        $cer->save();
        return redirect()->back();

    }

}
