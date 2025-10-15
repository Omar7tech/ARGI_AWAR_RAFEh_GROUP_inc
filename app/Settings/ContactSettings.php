<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{

    public ?array $emails = [];
    public ?array $phone_numbers = [];
    public ?array $locations = [];

    public ?string $business_hours = 'Monday - Friday: 8:00 AM - 6:00 PM Saturday: 9:00 AM - 2:00 PM Sunday: Closed';

    public ?array $social_media = [];







    public static function group(): string
    {
        return 'contact';
    }
}
