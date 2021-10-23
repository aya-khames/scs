<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Compressoritem extends Eloquent{
    protected $fillable =['Name_C', 'ID_WO', 'CRET_NO', 'ID_NUM', 'QTY','Description','Pressure'];

}
