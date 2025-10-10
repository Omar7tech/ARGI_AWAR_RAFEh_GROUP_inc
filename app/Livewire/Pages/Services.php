<?php
namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

class Services extends Component
{
    #[Title('Services | Awar Rafeh Group')]
    public function render()
    {
        $services = Service::with('media')->get();
        return view('livewire.pages.services', compact('services'));
    }
}
