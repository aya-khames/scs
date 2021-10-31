<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Cetificate;
use App\Models\Client;
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

}
