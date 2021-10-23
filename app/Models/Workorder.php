<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Workorder extends Eloquent{
    protected $fillable =['Name_C', 'ID_QUO','ID_WO', 'C_P', 'P_O', 'Fax_C', 'Currency_WO', 'Date_WO',
         'Date_WO1', 'Delivery_Date', 'VALIDITY_WO', 'Note_WO', 'Case_WO'];

}

