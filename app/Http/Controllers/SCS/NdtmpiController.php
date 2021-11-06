<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
use App\Models\Dpi;
use App\Models\Mpi;
use Illuminate\Http\Request;

class NdtmpiController extends Controller
{
    public function showNewMpi(){
        $clients = Client::all();
        return view('employee.ndt.mpi.MPINew',['clients' => $clients]);
    }
    public function insertMPINew(Request $request){
        $mpi = new Mpi();
        $mpi->Name_C = $request->client;
        $mpi->ID_WO = $request->work;
        $mpi->CERT_NO = $request->cert;
        $mpi->REQ_NO = $request->req;
        $mpi->DATE_C1 = $request->date;
        $mpi->DATE_INSP1 = $request->dateINSP;
        $mpi->LOCATION_C = $request->location;
        $mpi->Description_C = $request->description;
        $mpi->TEST_SPEC = $request->testSpec;
        $mpi->SURFACE_CON = $request->surface;
        $mpi->ACC_STAN = $request->accept;
        $mpi->MATERIAL_C = $request->material;
        $mpi->TEST_PN = $request->testno;
        $mpi->DYE_PEN = $request->dye;
        $mpi->INSPECTOR_C = $request->inspector;
        $mpi->save();
        $cer = new Cetificate();
        $cer->Name_C = $request->client;
        $cer->ID_WO = $request->work;
        $cer->Report_num = $request->cert;
        $cer->Report_Type = "NDT MPI";
        $cer->save();
        return redirect()->back();

    }

}
