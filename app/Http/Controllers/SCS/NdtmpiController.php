<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;

class NdtmpiController extends Controller
{
    public function showNewMpi(){
        $clients = Client::all();
        return view('employee.ndt.mpi.MPINew',['clients' => $clients]);
    }

}
