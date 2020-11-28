<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primaryKey = 'nip';
    protected $appends = [
        'sisa_kuota'
    ];

    public function getSisaKuotaAttribute()
    {
        return $this->maksimal - count($this->Form);
    }

    public function Form()
    {
        return $this->hasMany('App\Models\Form', 'nip', 'nip');
    }

    public function Akademik()
    {
        return $this->belongsTo('App\Models\Akademik', 'nip', 'nip');
    }
}
