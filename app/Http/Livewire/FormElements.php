<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormElements extends Component
{
  public $size = 'select';
  public $extras = [];


  public function mount(){
    // dd($this->size, $this->extras);
  }

  public function resetIt($id){
    if($id=='size')
      $this->size = 'select';
    if($id=='extras')
      $this->extras = [];
  }
  public function render()
  {
    return view('livewire.form-elements');
  }
}
