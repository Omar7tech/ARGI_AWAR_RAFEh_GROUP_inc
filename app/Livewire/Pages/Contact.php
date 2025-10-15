<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Contact Us | Awar Rafeh Group')]
    public $meta_description = '';

    public function mount()
    {
        $this->contactSettings = app(\App\Settings\ContactSettings::class);

        $parts = ["Contact Awar Rafeh Group"];

        

        if (!empty($this->contactSettings->phone_numbers)) {
            foreach ($this->contactSettings->phone_numbers as $phone) {
                $parts[] = "{$phone['label']}: {$phone['phone_number']}";
            }
        }

        if (!empty($this->contactSettings->emails)) {
            foreach ($this->contactSettings->emails as $email) {
                $parts[] = "{$email['label']}: {$email['email']}";
            }
        }

        $this->meta_description = implode(' | ', array_filter($parts));
    }

    public function render()
    {
        $contactSettings = app(\App\Settings\ContactSettings::class);
        return view('livewire.pages.contact', compact('contactSettings'));
    }
}
