<?php

namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

class ServiceShow extends Component
{

    public Service $service;



    public function render()
    {
        $otherServices = Service::where('id', '!=', $this->service->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('livewire.pages.service-show', [
            'otherServices' => $otherServices,
        ])->title($this->service->name . ' - Service Details| Awar Rafeh Group');
    }
}
