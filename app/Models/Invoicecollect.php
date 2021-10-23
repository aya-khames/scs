<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Invoicecollect extends Eloquent{
    protected $fillable =[
        'Name_C',
        'Date_IN',
        'ID_IN',
        'Date_IN1',
        'Collect',
        'Total_Price',
    ];
}
