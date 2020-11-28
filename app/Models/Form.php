<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $primaryKey = 'id';

    public function Mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa', 'nim', 'nim');
    }

    public function Akademik()
    {
        return $this->belongsTo('App\Models\Akademik', 'id_form', 'id');
    }
}
