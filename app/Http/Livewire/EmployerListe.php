<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Employer;
class EmployerListe extends Component
{
    protected $listeners = ['delet_Employer'];
    public function delet_Employer(Employer $employer){
        $employer->delete();
        return  redirect()->back();
    }
    public function render()
    {
        return view('livewire.employer-liste',['employers'=>Employer::all()]);
    }
}
