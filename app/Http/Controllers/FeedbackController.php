<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FeedbackController extends Controller
{
    function uploadFeedback(Request $request, $id_form)
    {
        $data = Form::find($id_form);
        if ($data) {
            $data->form_pengajuan =  $request->form_pengajuan;
            $data->save();
            return redirect()->route('index')->with('alert-success', 'Form berhasil dikirimkan');
        } else {
            abort(404);
        }
    }
}
