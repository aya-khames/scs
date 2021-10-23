<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Invoiceitem extends Eloquent{
    protected $fillable =[
        'Name_C',
        'ID_WO',
        'ID_IN',
        'Description',
        'Price_IN',
        'QTY',
        'Total_Price',
        'Type_IN'
    ];
}
