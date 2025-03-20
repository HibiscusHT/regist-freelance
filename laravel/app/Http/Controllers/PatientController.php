<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function Patientregister(Request $request){
        echo "hello from patient";
    }

    public function Clinicopts(Request $request){
        return view("patient.clinic",[
            "klinik"=>"Klinik Receh"
        ]);
    }
}
