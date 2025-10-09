<?php

namespace App\Livewire\Pages;

use App\Models\Service;
use Livewire\Component;

class ServiceShow extends Component
{

    public Service $service;

    public function render()
    {
        return view('livewire.pages.service-show');
    }
}
