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
    public function update(Request $request,Patient $patient){
        $request->validate([
            'code' => 'required|min:6',
            'name' => 'required',
            'contact' => 'required|min:6',
            'email'  =>'required|min:6',
            'address'=>'required'
        ]);

        $patient->name=$request->name;
        $patient->code=$request->code;
        $patient->contact=$request->contact;
        $patient->email=$request->email;
        $patient->address=$request->address;
        $patient->notes=$request->notes;
        $patient->blood_type=$request->blood_type;
        $patient->sex=$request->sex;
        $patient->save();
        return  redirect()->back();
    }
} 
