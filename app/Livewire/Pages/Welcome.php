<?php

namespace App\Livewire\Pages;

use App\Models\IndustriesWeServe;
use App\Models\OurWork as OurWorkModel;
use App\Models\Service ;
use Livewire\Attributes\Title;
use Livewire\Component;

class Welcome extends Component
{
    #[Title('Home | Awar Rafeh Group')]
    public function render()
    {
        $ourWorks = OurWorkModel::with('media')->get();
        $services = Service::with('media')->limit(10)->get();
        $industries = IndustriesWeServe::get();

        return view('livewire.pages.welcome' , compact('ourWorks' , 'services' , 'industries'));
    }
}
