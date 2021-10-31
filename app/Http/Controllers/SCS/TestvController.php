<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;

class TestvController extends Controller{

    public function showTVN(){
        $clients = Client::all();
        return view('employee.test.testvisual.TVNew',['clients' => $clients]);
    }

}
