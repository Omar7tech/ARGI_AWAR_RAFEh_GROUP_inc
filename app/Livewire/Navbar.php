<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Navbar extends Component
{

    public $services = [];

    public function mount()
    {
        $this->services = Service::get();
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
