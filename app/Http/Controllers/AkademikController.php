<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AkademikController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect()->route('index')->with('alert', 'Anda telah keluar');
    }
    public function lihatDashboard()
    {
        return view('home');
    }
    public function lihatDraftPengajuan()
    {
        return view('draft');
    }
}
