<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Cp;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller{

    public function searchClientNew(Request $request){
        if($request->client === "empty"){
            $c = Client::all();
        }
        else{
            $c = Client::where('Name_C', $request->client)->get();
        }
        return response()->json($c);
    }



    public function create(){
        $clients = Client::all();
        return view('employee.client.page',['clients'=>$clients]);
    }
    public function getRule(){
        $rules = [
            'name' => 'required|max:100',
            'address' => 'required|max:200'
        ];
        return $rules;
    }
    public function getMessage()
    {
        $msg = 'required';
        $msg1 = 'exceeded the limits';
        $messages = [
            'name.required' => $msg,
            'address.required' => $msg,
            'name.max' => $msg1,
            'address.max' => $msg1
        ];
        return $messages;
    }
    public function getCpRule(){
        $rules = [
            'nameCp' => 'required|max:100',
            'cp' => 'required|max:100'
        ];
        return $rules;
    }
    public function getCpMessage()
    {
        $msg = 'required';
        $msg1 = 'exceeded the limits';
        $messages = [
            'nameCp.required' => $msg,
            'cp.required' => $msg,
            'nameCp.max' => $msg1,
            'cp.max' => $msg1
        ];
        return $messages;
    }



    public function insertClient(Request $request){
        $validator = Validator::make($request->all(), $this->getRule(), $this->getMessage());
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
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
        //else show alert
        return redirect()->to('page');
    }
    public function insertCP(Request $request){
        $validator = Validator::make($request->all(), $this->getCpRule(), $this->getCpMessage());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $cp = new Cp();
        $cp->Name_C = $request->nameCp;
        $cp->C_P = $request->cp;
        $cp->save();
        return redirect()->to('addcont')->with('message', 'finally' );
    }

    public function getSearchRule(){
        $rules = [
            'name' => 'required|max:100',
        ];
        return $rules;
    }
    public function getSearchMessage()
    {
        $msg = 'required';
        $msg1 = 'exceeded the limits';
        $messages = [
            'name.required' => $msg,
            'name.max' => $msg1
        ];
        return $messages;
    }
    public function getCpSearchRule(){
        $rules = [
            'nameCp' => 'required|max:100',
        ];
        return $rules;
    }
    public function getCpSearchMessage()
    {
        $msg = 'required';
        $msg1 = 'exceeded the limits';
        $messages = [
            'nameCp.required' => $msg,
            'nameCp.max' => $msg1
        ];
        return $messages;
    }
    public function editClient(Request $request){
        $validator = Validator::make($request->all(), $this->getRule(), $this->getMessage());
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
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
            return redirect()->to('page');

        }
        return redirect()->to('page');
        //return alert message
    }
    public function searchClient(Request $request){
        $validator = Validator::make($request->all(), $this->getSearchRule(), $this->getSearchMessage());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $clients =Client::where('Name_C',$request->name)->first();
        return view('page',['clients'=>$clients]);
    }
    public function editCP(Request $request){
        $validator = Validator::make($request->all(), $this->getCpRule(), $this->getCpMessage());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $cps = Cp::where('Name_C',$request->nameCp)->get();
        foreach ($cps as $cp){
            $cp->C_P = $request->cp;
            $cp->save();
        }
        return redirect()->to('addcont');
       // return $cps;
    }
    public function deleteCP(Request $request){
        $validator = Validator::make($request->all(), $this->getCpRule(), $this->getCpMessage());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $cp = Cp::where([
            ['Name_C', '=', $request->nameCp],
            ['C_P', '=', $request->cp],
        ]);
        $cp->delete();
        return redirect()->to('addcont');
    }

}
