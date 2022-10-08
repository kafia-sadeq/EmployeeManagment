<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Profile extends Component
{
    public  $name, $email, $password;
//    public  $user_id=Auth::id();
    public $user_id;

    public function mount()
  {
    //    $user = User::where('id',$id)->first();
        // $this->user_id = Auth::id();
        // $this->name = $user->name;
        // $this->email = $user->email;
        $user_id=Auth::id();
        dd();
  }
    public function render()
    {
        return view('livewire.profile')->layout('layouts.master');
    }
}
