<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class TermsAndConditions extends Component
{
    #[Title('Terms and Conditions| Awar Rafeh Group')]
    public function render()
    {
        return view('livewire.pages.terms-and-conditions');
    }
}
