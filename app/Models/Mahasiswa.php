<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getById($nim)
    {
        $mhs = DB::table('mahasiswa')->where('nim',$nim)->get();
        return $mhs;
    }

    public static function index()
    {
        $mhs = DB::table('mahasiswa')->get();
        return $mhs;
    }

    public static function store($data)
    {
        $mhs = DB::table('mahasiswa')->insert($data);
        return $mhs;
    }

    public static function updateMhs($data)
    {
        $mhs = DB::table('mahasiswa')
                            ->where('nim',$data->nim)
                            ->update(['nama' => $data->nama,'password' => $data->password]);
        return $mhs;
    }

    public static function deleteMhs($nim)
    {
        $mhs = DB::table('mahasiswa')->where('nim',$nim)->delete();
        return $mhs;
    }
}
