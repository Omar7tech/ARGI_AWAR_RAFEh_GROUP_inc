<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{

    #[Title('About Us | Awar Rafeh Group')]
    public function render()
    {
        return view('livewire.pages.about');
    }
}
