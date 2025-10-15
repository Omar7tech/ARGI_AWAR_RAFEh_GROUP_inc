<?php

namespace App\Livewire\Pages;

use App\Models\OurWork as OurWorkModel;
use Livewire\Attributes\Title;
use Livewire\Component;

class OurWork extends Component
{
    #[Title('Projects | Awar Rafeh Group')]

    
    public function render()
    {
        $ourWorks = OurWorkModel::with('media')->get();

        return view('livewire.pages.our-work', compact('ourWorks'));
    }
}
