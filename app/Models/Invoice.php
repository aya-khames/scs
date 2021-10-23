<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Invoice extends Eloquent{
    protected $fillable =[
        'Name_C',
        'ID_WO',
        'ID_IN',
        'INType',
        'Address',
        'REQ_NO',
        'Currency_IN',
        'Enquiry',
        'Date_IN1',
        'Delivery_Time',
        'Transportation',
        'VatNumber',
        'VatType',
        'Vat',
        'TaxType',
        'Tax',
        'VatClient'
    ];
}
