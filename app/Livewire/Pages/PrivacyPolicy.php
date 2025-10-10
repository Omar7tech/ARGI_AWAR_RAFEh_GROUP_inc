<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    #[Title('Privacy & Policy| Awar Rafeh Group')]
    public function render()
    {
        return view('livewire.pages.privacy-policy');
    }
}
