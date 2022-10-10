<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Patient;
class PatientForm extends Component
{    public $code;
     public $name;
     public $contact;
     public $notes;
     public $email;
     public $sex;
     public $blood_type;
     public $address;

     public function store(){
        $validatedData = $this->validate([
            'code' => 'required|min:6',
            'name' => 'required',
            'contact' => 'required|min:6',
            'email'  =>'required|min:6',
            'notes' =>'required',
            'address'=>'required'
            
        ]);

    Patient::create([
    'code' => $this->code,
    'name' => $this->name,
    'contact' => $this->contact,
    'email'  =>$this->email,
    'notes' =>$this->notes,
    'address'=>$this->address,
    'notes'=>$this->notes
     ]);
    return  redirect()->route('patient')->with('message',"Successfully");
    }
    public function render()
    {
        $this->code=Str::random(8);
        return view('livewire.patient-form');
    }
}
