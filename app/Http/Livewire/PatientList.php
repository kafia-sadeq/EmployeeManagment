<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Patient;
class PatientList extends Component
{
    protected $listeners = ['delet_patient'];

    public function delet_patient(Patient $patient)
    {
        $patient->delete();
        return  redirect()->back();
    }
    public function render()
    {
       $patients=Patient::all();
        return view('livewire.patient-list',compact('patients'));
    }
}
