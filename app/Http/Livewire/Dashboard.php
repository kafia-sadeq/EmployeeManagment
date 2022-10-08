<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
// use App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
class Dashboard extends Component
{   

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $NewTabe=false;
    public $name,$email,$password;
    public $user_id;
    public $search;
    public $updateMode = false;
    public $profile=false;
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password='';
    }
    public function usertabe()
    {
       $this->NewTabe=!$this->NewTabe;
    }
    public function createNewUser(){
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('message', 'create New user Successfully');

        $this->resetInputFields();
    }
    public function edit($id)
    {
        // $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        // $this->password=$user->password;
     }
     public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
     public function update()
     {
         $validatedDate = $this->validate([
             'name' => 'required',
             'email' => 'required|email',
         ]);
         if ($this->user_id) {
             $user = User::find($this->user_id);
             $user->update([
                 'name' => $this->name,
                 'email' => $this->email,
             ]);
             $this->updateMode = false;
             session()->flash('message', 'Users Updated Successfully.');
             $this->resetInputFields();
         }
     }
     public function delete($id)
     {
         if($id){
             User::where('id',$id)->delete();
             session()->flash('message', 'Users Deleted Successfully.');
         }
     }

    // public function profile($id){
    //     $user = User::where('id',$id)->first();
    //     $this->user_id = $id;
    //     $this->name = $user->name;
    //     $this->email = $user->email;
    //     $this->emit('Showprofile');
    // }
   public function profile(){
    $this->profile=!$this->profile;
   }
    public function logout(){
        Auth::logout();
        return redirect()->to('/');
        $this->emit('postAdded');
     }

    public function render()
    {
        return view('livewire.dashboard',['users'=>User::where('name', 'like', '%'.$this->search.'%')->
        orWhere('email','LIKE',$this->search)->
        orderBy('id','DESC')->paginate(2)])->layout('layouts.master');
    }
}
