<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Cp;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller{
    public function create(){
        $clients = Client::all();
        return view('employee.client.page',['clients'=>$clients]);
    }
    public function searchClientNew(Request $request){
        if($request->client === "empty"){
            $c = Client::all();
        }
        else{
            $c = Client::where('Name_C', $request->client)->get();
        }
        return response()->json($c);
    }
    public function insertClient(Request $request){
        if (Client::where('Name_C',$request->name)->first() === null ){
            $client = new Client();
            $client->Name_C = $request->name;
            $id = $request->name;
            if (str_word_count($id) == 1){
                $client->ID_C = substr($id,0,3);
            }
            else if (str_word_count($id) == 2){
                $arr = explode(' ',trim($id));
                $client->ID_C = substr($arr[0],0,2). substr($arr[0],0,2);
            }
            else{
                $client->ID_C = '';
                $arr = explode(' ',trim($id));
                for ($i = 0; $i<str_word_count($id);$i++){
                    $client->ID_C .= substr($arr[$i],0,1);
                }
            }
            $client->Address = $request -> address;
            $client->Tel1 = $request -> tel1;
            $client->Tel2 = $request -> tel2;
            $client->Mobile1 = $request -> mob1;
            $client->Mobile2 = $request -> mob2;
            $client->VatClient = $request -> vat;
            $client->E_mail = $request -> mail;
            $client->Fax_C = $request -> fax;

            $client->save();
            return redirect()->to('page')->with('message', 'finally' );
        }
        return redirect()->to('page');
    }
    public function insertCP(Request $request){
//        $validator = Validator::make($request->all(), $this->getCpRule(), $this->getCpMessage());
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInputs($request->all());
//        }
        $cp = new Cp();
        $cp->Name_C = $request->nameCp;
        $cp->C_P = $request->cp;
        $cp->save();
        return redirect()->back();
    }

//    public function searchCP(Request $request){
//        if($request->client === "empty"){
//            $c = Cp::all();
//        }
//        else{
//            $c = Cp::where('Name_C', $request->client)->get();
//        }
//        return response()->json($c);
//    }
    public function editClient(Request $request){
        $client = Client::where('Name_C',$request->name)->first();
        if ($client !== null){
            $client->Address = $request -> address;
            $client->Tel1 = $request -> tel1;
            $client->Tel2 = $request -> tel2;
            $client->Mobile1 = $request -> mob1;
            $client->Mobile2 = $request -> mob2;
            $client->VatClient = $request -> vat;
            $client->E_mail = $request -> mail;
            $client->Fax_C = $request -> fax;
            $client->save();
        }
        return redirect()->back();
        //return alert message
    }
//    public function editCP(Request $request){
//        $cps = Cp::where('Name_C',$request->nameCp)->get();
//        foreach ($cps as $cp){
//            $cp->C_P = $request->cp;
//            $cp->save();
//        }
//        return redirect()->back();
//    }
    public function deleteCP(Request $request){
//        $validator = Validator::make($request->all(), $this->getCpRule(), $this->getCpMessage());
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInputs($request->all());
//        }
        $cp = Cp::where([
            ['Name_C', '=', $request->nameCp],
            ['C_P', '=', $request->cp],
        ]);
        $cp->delete();
        return redirect()->back();
    }

}
