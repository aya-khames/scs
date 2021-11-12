<?php

namespace App\Http\Controllers\SCS;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Hire;
use Illuminate\Http\Request;
class HireController extends Controller
{
    public function showHire(){
        $clients = Client::all();
        return view('employee.hire.hireOFNew',['clients' => $clients]);
    }
    public function insertHire(Request $request){

        $hire = new Hire();
        $hire->Name_C = $request->client;
        $hire->ID_DN = $request->dnote;
        $hire->Hire_ON = $request->hireon;
        $hire->Date_ON = $request->date;
        $hire->Date_ON1 = $request->date;
        $hire->Hire_OFF = $request->hireoff;
        $hire->Date_OFF = $request->dateoff;
        $hire->Date_OFF1 = $request->dateoff;
        $hire->save();
        return redirect()->back();

    }
    public function dynamicHire(Request $request){
        $wo = Deliverynote::where('Name_C', '=', $request->client)->get();
        return response()->json($wo);
    }
    public function generateHire(Request $request){

        $hireOn = 'HO';
        $hireOn .= substr($request->dnote,2, strlen($request->dnote));
        $h = '';
        $hof = '';
        $date = '';
        for ($i=0 ; $i < strlen($hireOn) ; $i++){
            if ( ctype_digit($hireOn[$i]) ) {
                break;
            }else{
                $h .= $hireOn[$i];
            }
        }
        $temp = $h;
        $hire = Hire::where('ID_DN', $request->dnote)->first();
        if($hire === null) {
            $dnote = Deliverynote::where('ID_DN', $request->dnote)->first();
            if (Hire::where('Name_C', $dnote->Name_C)->first() === null) {
                $h .= '1';
            } else {

                $num = intval(substr($hire->Hire_ON, strlen($h), strlen($hire->Hire_ON)));
                $num++;
                $h .= strval($num);
                while (Hire::where('Hire_ON', $h)->first() !== null) {
                    $num = intval(substr($h, strlen($temp), strlen($h)));
                    $num++;
                    $h = $temp;
                    $h .= strval($num);
                }
            }
        }
        else{
            $temp = Hire::where('Hire_ON', $hire->Hire_ON)->first();
            $hire = $temp;
            $h = $hire->Hire_ON;
        }

       if ( $hire !== null && $hire->Hire_ON !== "" &&  $hire->Hire_OFF === "" ) {
            $hof = str_replace('O','F',$h);
            $date = $hire->Date_ON;

        }


        return response()->json([
            'hon'=>$h,
            'hof'=>$hof,
            'date'=>$date
        ]);
    }
    public function searchH(Request $request){
        if ($request->quote === "empty") {
            $c = Hire::all();
        } else {
            if ($request->searchType === "hireon"){
                $c = Hire::where('Hire_ON', $request->quote)->get();

            } else if ($request->searchType === "hireoff") {
                $c = Hire::where('Hire_OFF', $request->quote)->get();
            }else if ($request->searchType === "delivery") {
                $c = Hire::where('ID_DN', $request->quote)->get();
            } else {
                $c = Hire::where('Name_C', $request->quote)->get();
            }
        }
        return response()->json($c);
    }
    public function editH(Request $request){
        if ($request->id !== ""){
            $comp = Hire::where('_id', $request->id)->first();
            if ($comp !== null){
                $comp->Name_C = $request->client;
                $comp->ID_DN = $request->dnote;
                $comp->Hire_ON = $request->hireon;
                $comp->Date_ON = $request->date;
                $comp->Hire_OFF = $request->hireoff;
                $comp->Date_OFF = $request->dateoff;
                $comp->save();
            }
        }
        return redirect()->back();
    }



}
