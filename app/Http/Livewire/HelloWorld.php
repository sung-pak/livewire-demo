<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class HelloWorld extends Component
{
    public $namez = 'Nobody Gets Me';

    public $name;
    public $email;
    public $password;
    /* public function render()
    {
        return view('livewire.hello-world', [
          'title' => 'livewire tester'
        ]);
    } */

    public function resetName($name){
      $this->namez = $name;
    }

    public function submitz(){
      $validatedData = $this->validate([
          'name' => 'required|min:6',
          'email' => 'required|email|unique:users',
          'password' => 'required',
      ]);
      
      //\App\Models\User::insert($validatedData);

      try{
        DB::table('users')->insert( $validatedData );
        $this->namez = $this->name;
        
        return array('message'=>'success');
      }catch(\Exception $e){
            //dd($e->getMessage());
        return $e->getMessage();
      }
    }
}
