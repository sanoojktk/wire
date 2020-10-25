<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use DB;
class RegistrationLogin extends Component
{
	public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.registration-login');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
         
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){

            return redirect()->to('logins');

               // session()->flash('message', "You have been successfully login.");
        }else{
            session()->flash('error', 'Email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $v = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        $this->password = Hash::make($this->password); 


        $data =  array();
        $data = [ 'name' => $this->name, 
                  'email' => $this->email,
                  'password' => $this->password
                ];
    $st = DB::table('users')
      ->insert($data);
 
        session()->flash('message', 'You have been successfully registered.');
 
        $this->resetInputFields();
 
    }

     public function upload()
    {
 return view('livewire.up_fils');
    }
}
