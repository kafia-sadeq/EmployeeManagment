<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Patient;
class PatientForm extends Component
{    public $code;
     public $name;
     public $contact;
     public $note;
     public $email;

    public function store(){
        $validatedData = $this->validate([
            'code' => 'required|min:6',
            'name' => 'required',
            'contact' => 'required|min:6',
            'email'  =>'required|min:6',
        ]);

   Patient::create($validatedData);
  return  redirect()->route('patient')->with('message',"Successfully");
    }
    public function render()
    {
        $this->code=Str::random(8);
        return view('livewire.patient-form');
    }
}
