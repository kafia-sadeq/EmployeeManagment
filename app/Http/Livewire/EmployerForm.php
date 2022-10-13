<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Fonction;
use App\Models\Employer;

class EmployerForm extends Component
{
    public $name,$email,$contact,$department;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'contact'=>'required',
        'department'=>'required'
    ];
    public function store(){
        $validatedData = $this->validate();
        //  dd($validatedData);
        Employer::create([
            'name'=>$this->name,
             'email'=>$this->email,
             'contact'=>$this->contact,
             'fonction_id'=>$this->department
        ]);
        
        return  redirect()->route('employer')->with('message',"Successfully");


    
    }
    public function render()
    {
        return view('livewire.employer-form',['Fonctions'=>Fonction::all()]);
    }
}
