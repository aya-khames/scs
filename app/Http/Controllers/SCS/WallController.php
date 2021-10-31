<?php

namespace App\Http\Controllers\SCS;
use App\Http\Controllers\Controller;
use App\Models\Client;

class WallController extends Controller{
    public function showNewWall(){
        $clients = Client::all();
        return view('employee.wall.wallThickNew',['clients' => $clients]);
    }

}
