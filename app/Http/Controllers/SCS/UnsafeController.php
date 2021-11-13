<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Unsafe;
use App\Models\Unsafeitem;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

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
    public function insertUS(Request $request){
        $unsafe = new Unsafe();
        $unsafe->Name_C = $request->client;
        $unsafe->Address = $request->address;
        $unsafe->ID_WO = $request->work;
        $unsafe->Report_num = $request->report;
        $unsafe->ID_NO = $request->ID;
        $unsafe->Date_Report1 = $request->date1;
        $unsafe->Que_1 = $request->radio1;
        $unsafe->Que_2 = $request->radio2;
        $unsafe->Que_3 = $request->radio3;
        $unsafe->Que_4 = $request->radio4;
        $unsafe->Que_5 = $request->radio5;
        $unsafe->Que_6 = $request->radio6;
        $unsafe->Que_7 = $request->radio7;
        $unsafe->Que_8 = $request->radio8;
        $unsafe->Que_9 = $request->radio9;
        $unsafe->text_1 = $request->test1;
        $unsafe->text_2 = $request->test2;
        $unsafe->text_3 = $request->test3;
        $unsafe->Name_per_mrep = $request->makeReport;
        $unsafe->Name_per_arep = $request->authReport;
        $unsafe->Latest_date = $request->latestDate;
        $unsafe->Name_add_emp = $request->nameAdd;
        $unsafe->save();
        return redirect()->back();
    }
    public function editUS(Request $request){
            $unsafe = Unsafe::where('Report_num', $request->report);
            if ($unsafe !== null){
                $unsafe->ID_WO = $request->work;
                $unsafe->Report_num = $request->report;
                $unsafe->ID_NO = $request->ID;
                $unsafe->Date_Report1 = $request->date1;
                $unsafe->Que_1 = $request->radio1;
                $unsafe->Que_2 = $request->radio2;
                $unsafe->Que_3 = $request->radio3;
                $unsafe->Que_4 = $request->radio4;
                $unsafe->Que_5 = $request->radio5;
                $unsafe->Que_6 = $request->radio6;
                $unsafe->Que_7 = $request->radio7;
                $unsafe->Que_8 = $request->radio8;
                $unsafe->Que_9 = $request->radio9;
                $unsafe->text_1 = $request->test1;
                $unsafe->text_2 = $request->test2;
                $unsafe->text_3 = $request->test3;
                $unsafe->Name_per_mrep = $request->makeReport;
                $unsafe->Name_per_arep = $request->authReport;
                $unsafe->Latest_date = $request->latestDate;
                $unsafe->Name_add_emp = $request->nameAdd;
                $unsafe->save();
            }

            return redirect()->back();
        }
        #######################################Des#####################
    public function insertUSD(Request $request){
        $unsafe = new Unsafeitem();
        $unsafe->Name_C = $request->client;
        $unsafe->ID_WO = $request->work;
        $unsafe->Report_num = $request->report;
        $unsafe->Description = $request->description;
        $unsafe->Safe_WL = $request->safewl;
        $unsafe->Date_of_MK = $request->datem;
        $unsafe->Date_of_LTE = $request->datele;
        $unsafe->save();
        return redirect()->back();
    }
    public function editUSD(Request $request){
        $unsafe = Unsafeitem::where('_id', $request->id)->first();
        if ($unsafe !== null){
            $unsafe->Description = $request->description;
            $unsafe->Safe_WL = $request->safewl;
            $unsafe->Date_of_MK = $request->datem;
            $unsafe->Date_of_LTE = $request->datele;
            $unsafe->save();
        }
        return redirect()->back();
    }
    public function deleteUSD(Request $request){
        $unsafe = Unsafeitem::where('_id', $request->id);
        if ($unsafe !== null){
            $unsafe->delete();
        }
        return redirect()->back();
    }
    public function searchUSD(Request $request){
        if ($request->searchType === "search"){
            if ($request->quote === "empty"){
                $c = Unsafe::all();
            } else{
                $c = Unsafe::where('Report_num', $request->quote)->get();
            }
        } else{
            if ($request->quote === "empty"){
                $c = Unsafeitem::all();
            } else{
                $c = Unsafeitem::where('Report_num', $request->quote)->get();
            }
        }
        return response()->json($c);
    }




}
