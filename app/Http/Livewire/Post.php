<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $msg = "Ola Mundo!";
    public function render()
    {
        return view('livewire.post');
    }
}
