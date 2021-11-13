<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Wall;
use App\Models\Wallitem;
use Illuminate\Http\Request;

class WallController extends Controller{
    public function showNewWall(){
        $clients = Client::all();
        return view('employee.wall.wallThickNew',['clients' => $clients]);
    }
    public function insertWallN(Request $request){
        $comp = new Wall();
        $comp->Name_C = $request->client;
        $comp->ID_WO = $request->work;
        $comp->Location = $request->location;
        $comp->Report_NO = $request->repno;
        $comp->Date_Wall = $request->repdate;
        $comp->ID_No = $request->idno;
        $comp->Material = $request->material;
        $comp->Details1 = $request->det1;
        $comp->Details2 = $request->det2;
        $comp->Name_Inspected = $request->nameInspect;
        $comp->Name_Approved = $request->nameApp;
        $comp->save();
        return redirect()->back();
    }
    public function searchWall(Request $request){
        if ($request->quote === "empty") {
            $c = Wall::all();
        } else {
            $c = Wall::where('Report_NO', $request->quote)->get();
        }
        return response()->json($c);
    }
    public function editWall(Request $request){
        if ($request->id !== ""){
            $comp = Wall::where('_id', $request->id)->first();
            if ($comp !== null){
                $comp->Name_C = $request->client;
                $comp->ID_WO = $request->work;
                $comp->Location = $request->location;
                $comp->Report_NO = $request->repno;
                $comp->Date_Wall = $request->repdate;
                $comp->ID_No = $request->idno;
                $comp->Material = $request->material;
                $comp->Details1 = $request->det1;
                $comp->Details2 = $request->det2;
                $comp->Name_Inspected = $request->nameInspect;
                $comp->Name_Approved = $request->nameApp;
                $comp->save();
            }
        }
        return redirect()->back();
    }
    ###################desc#########################
    public function searchWallD(Request $request){
        if ($request->searchType === "report"){
            if ($request->quote === "empty"){
                $c = Wall::all();
            } else{
                $c = Wall::where('Report_NO', $request->quote)->get();
            }
        } else{
            if ($request->quote === "empty"){
                $c = Wallitem::all();
            } else{
                $c = Wallitem::where('Report_NO', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function insertWallD(Request $request){
        $t = Wallitem::where('_id', $request->id)->first();
        if ( $t === null){
            $t = new Wallitem();
            $t->Name_C = $request->client;
            $t->ID_WO = $request->work;
            $t->Report_NO = $request->repNo;
            $t->ITEM = $request->item;
            $t->Original_T = $request->orgth;
            $t->Thickness_mini = $request->mint;
            $t->Thickness_max = $request->maxt;
            $t->Remark = $request->remark;
            $t->save();
        }
        return redirect()->back();
    }
    public function editWallD(Request $request){
        $t = Wallitem::where('_id', $request->id)->first();
        if ( $t !== null){
            $t->ITEM = $request->item;
            $t->Original_T = $request->orgth;
            $t->Thickness_mini = $request->mint;
            $t->Thickness_max = $request->maxt;
            $t->Remark = $request->remark;
            $t->save();
        }
        return redirect()->back();
    }
    public function deleteWallD(Request $request){
        $t = Wallitem::where('_id', $request->id)->first();
        if ($t !== null){
            $t->delete();
        }
        return redirect()->back();
    }


}
