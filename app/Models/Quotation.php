<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Quotation extends Eloquent{
    protected $fillable =['Name_C', 'ID_QUO', 'C_P', 'Enquiry', 'Currency_QUO','Date_QUO1','Delivery_Time','Transportation_QUO','VALIDITY_QUO','VatNumber','VatType','Vat'];


}
