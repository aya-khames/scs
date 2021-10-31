<?php

namespace App\Http\Controllers\SCS;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Quotation;
use App\Models\Workorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('employee.invoice.invoiceNew',['clients'=>$clients]);
    }
    public function insertInvoce(Request $request)
    {
        $quot = new Invoice();
        $quot->Name_C = $request->client;
     /*   $quot->ID_IN = $request->invoice;
        $quot->ID_WO = $request->workorder;
        $quot->INType = $request->contperson;*/
        $quot->ID_IN = $request->invoice;
        $quot->ID_WO = $request->workorder;
        $quot->Address = $request->Address;
        $quot->REQ_NO = $request->reqnumber;
        $quot->Currency_IN = $request->currency;
    //    $quot->Enquiry = $request->date;
        $quot->Date_IN1 = $request->date;
        $quot->Delivery_Time = $request->delivery;
        $quot->Transportation = $request->transportation;
        $quot->VatNumber = $request->vat;
        $quot->VatType = $request->delivery;
        $quot->Vat = $request->percent;
        $quot->TaxType = $request->tax;
        $quot->Tax = $request->tpercent;
       // $quot->VatClient = $request->note;
        $quot->save();
        return redirect()->back();
    }
    public function editInvoice(Request $request)
    {

    }
    public function deleteInvoice(Request $request)
    {

    }
    public function findAdd(Request $request)
    {
        $add = Client::where('Name_C', $request->client)->first();
        $wo = Workorder::where('Name_C', $request->client)->orderBy('_id', 'asc')->get();
        return response()->json([
            'add'=>$add,
            'wo'=>$wo
        ]);
    }
    public function generateInvoice(Request $request)
    {
        $work = Workorder::where('ID_WO', $request->work)->first();
        $inID = 'IN'.$work->ID_QUO;
        $Id = '';
        for ($i=0 ; $i < strlen($inID) ; $i++){
            if ( ctype_digit($inID[$i]) ) {
                break;
            }else{
                $Id .= $inID[$i];
            }
        }
        $temp = $Id;
        $invoice = Invoice::where('ID_WO', $request->work)->first();
        if ($invoice === null){
            if (Invoice::where('Name_C', $work->Name_C)->first() === null){
                $Id .= '1';
            }else{
                if ($invoice !== null){
                    $num =intval(substr($invoice->ID_IN,strlen($Id),strlen($invoice->ID_IN)));
                    $num++;
                    $Id .= strval($num);
                    while (Invoice::where('ID_IN', $Id)->first() !== null){
                        $num =intval(substr($Id,strlen($temp),strlen($Id)));
                        $num++;
                        $Id = $temp.strval($num);
                    }
                }
                else{
                    $Id = '';
                }

            }
        }
        else{
            $Id = '';
        }
        return response()->json($Id);
    }




}
