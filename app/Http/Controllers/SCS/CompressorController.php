<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;

class CompressorController extends Controller
{
    public function showNewComp(){
        $clients = Client::all();
        return view('employee.compressor.compNew',['clients' => $clients]);
    }
}
