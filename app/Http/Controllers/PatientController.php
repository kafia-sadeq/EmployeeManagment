<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
class PatientController extends Controller
{
    public   function index(){
    return view("patients.index");
    }
    public function create(){
     return view("patients.create");
    }
    public function edit(Patient $patient){
    return view("patients.edit", compact('patient'));
    }
} 
