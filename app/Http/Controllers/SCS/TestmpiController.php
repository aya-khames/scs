<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;

class TestmpiController extends Controller{
    public function showTVM(){
        $clients = Client::all();
        return view('employee.test.testmpi.TMVMNew',['clients' => $clients]);
    }

}
