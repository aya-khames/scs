<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Qitem extends Eloquent{
    protected $fillable =['Name_C', 'ID_QUO', 'Description', 'Price_QUO', 'QTY', 'Total_Price', 'Type_QUO'];

}
