<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function registerMahasiswa(Request $request){

        $validator = Validator::make($request->all(), [
            'nim' => 'required|string|max:15|unique:mahasiswa',
            'nama' => 'required|string|max:50',
            'keminatan' => 'required|string|max:30',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $mahasiswa = ["nim"=>$request->nim, "password"=>Hash::make($request->password), "keminatan"=>$request->keminatan, "nama"=>$request->nama];
        $newmahasiswa = Mahasiswa::store($mahasiswa);
        return response()->json(['data'=>$newmahasiswa,'status' => 'Pendaftaran berhasil'], 200);
    }

    public function cek(){

        return response()->json(['status' => 'Pendaftaran berhasil'], 200);
    }
}
