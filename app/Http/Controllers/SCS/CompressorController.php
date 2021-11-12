<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Compressor;
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


}
