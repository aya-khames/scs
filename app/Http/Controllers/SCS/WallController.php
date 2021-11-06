<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Wall;
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

}
