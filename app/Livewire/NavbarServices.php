<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class NavbarServices extends Component
{
    public $services = [];

    public function mount()
    {
        $this->services = Service::get();
    }

    public function render()
    {
        return view('livewire.navbar-services');
    }
}
