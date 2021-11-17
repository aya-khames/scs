<?php

namespace App\Http\Controllers\SCS;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Invoiceitem;
use App\Models\Workorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class InvoiceController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('employee.invoice.invoiceNew',['clients'=>$clients, 'posts' => ""]);
    }
    public function insertInvoce(Request $request)
    {
        $quot = new Invoice();
        $quot->Name_C = $request->client;
        $quot->ID_IN = $request->invoice;
        $quot->ID_WO = $request->workorder;
        $quot->Address = $request->Address;
        $quot->REQ_NO = $request->reqnumber;
        $quot->Currency_IN = $request->currency;
        $quot->Date_IN1 = $request->date;
        $quot->Delivery_Time = $request->delivery;
        $quot->Transportation = $request->transportation;
        $quot->VatNumber = $request->vat;
        $quot->VatType = $request->delivery;
        $quot->Vat = $request->percent;
        $quot->TaxType = $request->tax;
        $quot->Tax = $request->tpercent;
        $quot->save();
        return redirect()->back();
    }
    public function insertInvoceD(Request $request){
        $quot = new Invoiceitem();
        $quot->Name_C = $request->client;
        $quot->ID_IN = $request->invoice;
        $quot->ID_WO = $request->work;
        $quot->Description = $request->description;
        $quot->Price_IN = $request->price;
        $quot->QTY = $request->qty;
        $quot->Total_Price = $request->ttlPrice;
        $quot->save();
        return redirect()->back();
    }
    public function editIND(Request $request){
        $quot = Invoiceitem::where('_id', $request->id)->first();
        if ($quot !== null){
            $quot->Description = $request->description;
            $quot->Price_IN = $request->price;
            $quot->QTY = $request->qty;
            $quot->Total_Price = $request->ttlPrice;
            $quot->save();
        }
        return redirect()->back();
    }
    public function searchIND(Request $request){
        $invoice = (isset(\request()->invoice) && \request()->invoice != '') ? \request()->invoice : null;

        if ($invoice === null){
            $c = Invoiceitem::paginate(10);
        } else{
            $c = Invoiceitem::where('ID_IN', $invoice)->paginate(10);
        }
        return view('employee.invoice.invoiceDes', ['posts' => $c]);
    }
    public function editInvoice(Request $request)
    {
        $quot = Invoice::where('_id',$request->id)->first();
        if ($quot !== null) {
            $quot->ID_WO = $request->work;
            $quot->Name_C = $request->name;
            $quot->ID_IN = $request->invoice;
            $quot->REQ_NO = $request->reqno;
            $quot->Currency_IN = $request->currency;
            $quot->Date_IN1 = $request->date;
            $quot->Transportation_QUO = $request->transportation;
            $quot->Delivery_Time = $request->delivery;
            $quot->save();
        }
        return redirect()->back();
    }
    public function deleteInvoice(Request $request)
    {
        $quot = Invoice::where('_id',$request->id)->first();
        if ($quot !== null) {
            $quot->delete();
        }
        return redirect()->back();
    }
    public function searchIn(Request $request)
    {
        $searchType = (isset(\request()->searchType) && \request()->searchType != '') ? \request()->searchType : null;
        $invoice = (isset(\request()->invoice) && \request()->invoice != '') ? \request()->invoice : null;
        $client = (isset(\request()->client) && \request()->client != '') ? \request()->client : null;
        $work = (isset(\request()->work) && \request()->work != '') ? \request()->work : null;

        if (($searchType === "invoice" && $invoice === null) || ($searchType === "client" && $client === null || ($searchType === "work" && $work === null))) {
            $c = Invoice::paginate(10);
        } else {
            if ($searchType === "invoice") {
                $c = Invoice::where('ID_IN', $invoice)->paginate(10);
            } else if ($searchType === "client") {
                $c = Invoice::where('Name_C', $client)->paginate(10);
            } else {
                $c = Invoice::where('ID_WO', $work)->paginate(10);
            }
        }
        $clients = Client::all();
        return view('employee.invoice.invoiceNew', ['clients' => $clients, 'posts' => $c]);
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
