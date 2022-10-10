<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientEdite extends Component
{
    public $patient;
    public $name;
    public function render()
    {
        
        return view('livewire.patient-edite');
    }
}
