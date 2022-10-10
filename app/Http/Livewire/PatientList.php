<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Patient;
class PatientList extends Component
{
    public function render()
    {
       $patients=Patient::all();
        return view('livewire.patient-list',compact('patients'));
    }
}
