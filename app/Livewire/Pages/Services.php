<?php
namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $services = Service::with('media')->get();
        return view('livewire.pages.services', compact('services'));
    }
}
