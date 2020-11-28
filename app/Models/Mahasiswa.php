<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function Form()
    {
        return $this->hasOne('App\Models\Form', 'nim', 'nim');
    }

    public function Feedback()
    {
        return $this->belongsTo('App\Models\Feedback', 'nim', 'nim');
    }
}
