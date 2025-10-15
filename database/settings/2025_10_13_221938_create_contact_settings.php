<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('contact.emails', []);
        $this->migrator->add('contact.phone_numbers', []);
        $this->migrator->add('contact.locations', []);
        $this->migrator->add('contact.business_hours', 'Monday - Friday: 8:00 AM - 6:00 PM Saturday: 9:00 AM - 2:00 PM Sunday: Closed');
        $this->migrator->add('contact.social_media', []);
    }
};
