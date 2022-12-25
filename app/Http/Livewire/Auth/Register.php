<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
    public $title = 'User Form';
    public $name;
    public $email;
    public $password;
    //public $passwordConfirmation;
  

    public function mount(){
        return view('livewire.auth.register')
                ->layout('layouts.base');
    }

    public function registerio(){

      $this->title = 'User Form';
      
      $validatedData = $this->validate([
        'name' => 'required|min:4',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6', // | same:passwordConfirmation
      ]);

      User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
      ]);

      $this->title = 'User Form Submit: Success!';
      $this->name = '';
      $this->email = '';
      $this->password = '';
    }

}
