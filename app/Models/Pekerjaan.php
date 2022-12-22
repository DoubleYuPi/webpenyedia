<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Pekerjaan extends Eloquent
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['tanggal'];

    public function penyedia(){
        return $this->belongsTo(Penyedia::class, 'penyedia_id');
   }

   public function jeniskerja(){
    return $this->belongsTo(Jeniskerja::class, 'jeniskerja_id');
   }

   public function personil(){
    return $this->belongsTo(Personil::class, 'personil_id');
   }

   public function user(){
    return $this->belongsTo(User::class, 'user_id');
}



}
