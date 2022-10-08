<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;
class Departman extends Component
{

    public $name ;

    public function render()
    {
        return view('livewire.departman',['Department'=>Department::all()])->layout('layouts.master');
    }
}
