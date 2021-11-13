<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Compressor;
use App\Models\Compressoritem;
use Illuminate\Http\Request;

class CompressorController extends Controller
{
    public function showNewComp()
    {
        $clients = Client::all();
        return view('employee.compressor.compNew', ['clients' => $clients]);
    }
    public function insertComp(Request $request)
    {
        $comp = new Compressor();
        $comp->Name_C = $request->client;
        $comp->ID_WO = $request->work;
        $comp->CRET_NO = $request->cerno;
        $comp->Date_Com = $request->repdate;
        $comp->Date_NTE = $request->dateNTE;
        $comp->save();
        return redirect()->back();
    }
    public function searchComp(Request $request)
    {
        if ($request->quote === "empty") {
            $c = Compressor::all();
        } else {
            $c = Compressor::where('CRET_NO', $request->quote)->get();
        }
        return response()->json($c);
    }
    public function editComp(Request $request){
        if ($request->id !== ""){
            $comp = Compressor::where('_id', $request->id)->first();
            if ($comp !== null){
                $comp->Name_C = $request->client;
                $comp->ID_WO = $request->work;
                $comp->CRET_NO = $request->cerno;
                $comp->Date_Com = $request->repdate;
                $comp->Date_NTE = $request->dateNTE;
                $comp->save();
            }
        }
        return redirect()->back();
    }
    ###################DESC###########################
    public function searchCD(Request $request){
        if ($request->searchType === "search"){
            if ($request->quote === "empty"){
                $c = Compressor::all();
            } else{
                $c = Compressor::where('CRET_NO', $request->quote)->get();
            }
        } else{
            if ($request->quote === "empty"){
                $c = Compressoritem::all();
            } else{
                $c = Compressoritem::where('CRET_NO', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function insertCD(Request $request){
        $t = Compressoritem::where('_id', $request->id)->first();
        if ($t === null){
            $t = new Compressoritem();
            $t->Name_C = $request->client;
            $t->ID_WO = $request->work;
            $t->CRET_NO = $request->certNo;
            $t->ID_NUM = $request->idNumber;
            $t->QTY = $request->qty;
            $t->Description = $request->description;
            $t->Pressure = $request->press;
            $t->save();
        }
        return redirect()->back();
    }
    public function editCD(Request $request){
        $t = Compressoritem::where('_id', $request->id)->first();
        if ( $t !== null){
            $t->ID_NUM = $request->idNumber;
            $t->QTY = $request->qty;
            $t->Description = $request->description;
            $t->Pressure = $request->press;
            $t->save();
        }
        return redirect()->back();
    }
    public function deleteCD(Request $request){
        $t = Compressoritem::where('_id', $request->id)->first();
        if ($t !== null){
            $t->delete();
        }
        return redirect()->back();
    }


}
