<?php

namespace App\Livewire\Pages;

use App\Models\OurWork as OurWorkModel;
use Livewire\Component;

class OurWork extends Component
{
    public function render()
    {
        $ourWorks = OurWorkModel::with('media')->get();

        return view('livewire.pages.our-work', compact('ourWorks'));
    }
}
