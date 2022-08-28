<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    // use HasFactory;
    public function jadwals(){
        return $this->hasOne(Jadwal::class,'id','jadwals_id');
    }
    public function lapangans(){
        return $this->hasOne(Lapangan::class,'id','lapangans_id');
    }
}
