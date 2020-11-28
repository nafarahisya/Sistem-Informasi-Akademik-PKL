<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    use HasFactory;
    protected $table = 'akademik';
    protected $primaryKey = 'id';

    public function Dosen()
    {
        return $this->hasMany('App\Models\Dosen', 'nip', 'nip');
    }

    public function Form()
    {
        return $this->hasMany('App\Models\Form', 'id_form', 'id');
    }

}
