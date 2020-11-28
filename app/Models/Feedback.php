<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';
    protected $primaryKey = 'id';

    public function Mahasiswa()
    {
        return $this->hasOne('App\Models\Mahasiswa', 'nim', 'nim');
    }

    public function Akademik()
    {
        return $this->belongsTo('App\Models\Akademik', 'id', 'id_akademik');
    }


}
