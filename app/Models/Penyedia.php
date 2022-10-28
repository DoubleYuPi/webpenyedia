<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Penyedia extends Eloquent
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function pekerjaans(){
       return $this->hasMany(Pekerjaan::class);
   }

//    public function getAverage(){
//         return $this->pekerjaans()->average('nilai_total');
//    }
}
