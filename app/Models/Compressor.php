<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Compressor extends Eloquent{
    protected $fillable =['Name_C', 'ID_WO', 'CRET_NO', 'Date_Com', 'Date_NTE'];

}
