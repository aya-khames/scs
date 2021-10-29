<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Cp;
use App\Models\Workorder;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CdnController extends Controller{
    public function showcdn(){
        $clients = Client::all();
        return view('employee.cdn.CDN',['clients' => $clients]);
    }
    public function getCP(Request $request){
        $work = Workorder::where('ID_WO', $request->work)->first();
        $cp = Cp::where('Name_C', $work->Name_C)->get();
        return response()->json($cp);
    }

}
