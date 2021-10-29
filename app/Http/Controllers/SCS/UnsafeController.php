<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Unsafe;
use App\Models\Workorder;
use Illuminate\Http\Request;

class UnsafeController extends Controller{
    public function showunsafe(){
        $clients = Client::all();
        return view('employee.unsafe.unsafeNew',['clients' => $clients]);
    }
    public function generateRep(Request $request){
        $work = Unsafe::where('ID_WO', $request->work)->orderBy('_id', 'desc')->first();
        $report = 'DEF/'.$request->work.'/';
        if ($work !== null){
            $no = substr($work->Report_num,strlen($report),strlen($work->Report_num));
            $temp = $report;
            $report .= $no;
            while (Unsafe::where('Report_num', $report)->first() !== null ){
                $no = intval(substr($report,strlen($temp),strlen($report)));
                $no++;
                $report = $temp.strval($no);
            }
        }
        else{
            $report .= '1';
        }

        return response()->json($report);


    }

}
