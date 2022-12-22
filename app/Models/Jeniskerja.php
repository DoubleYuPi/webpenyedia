<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Jeniskerja extends Eloquent
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function pekerjaans(){
       return $this->hasMany(Pekerjaan::class);
   }

//    public function penyedia(){
//     return $this->belongsTo(Penyedia::class, 'penyedia_id');
// }

//    public function getAverage(){
//         return $this->pekerjaans()->average('nilai_total');
//    }
}
