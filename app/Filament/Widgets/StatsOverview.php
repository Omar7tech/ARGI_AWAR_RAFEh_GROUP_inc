<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use App\Models\OurWork;
use App\Models\IndustriesWeServe;
use App\Settings\ContactSettings;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalServices = Service::count();
        $activeServices = Service::where('active', true)->count();

        $totalWorks = OurWork::count();
        $activeWorks = OurWork::where('active', true)->count();

        $totalIndustries = IndustriesWeServe::count();

        $contact = app(ContactSettings::class);
        $emailsCount = is_array($contact->emails) ? count($contact->emails) : 0;
        $phonesCount = is_array($contact->phone_numbers) ? count($contact->phone_numbers) : 0;
        $socialCount = is_array($contact->social_media) ? count($contact->social_media) : 0;
        $locationsCount = is_array($contact->locations) ? count($contact->locations) : 0;

        return [
            Stat::make('Services', $totalServices)
                ->description("{$activeServices} active")
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('success'),

            Stat::make('Our Works', $totalWorks)
                ->description("{$activeWorks} active")
                ->descriptionIcon('heroicon-o-building-office-2')
                ->color('info'),

            Stat::make('Industries Served', $totalIndustries)
                ->description('Across multiple sectors')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->color('warning'),

            Stat::make('Contact Info', "{$phonesCount} Phones / {$emailsCount} Emails")
                ->description("{$socialCount} Socials • {$locationsCount} Locations")
                ->descriptionIcon('heroicon-o-envelope')
                ->color('primary'),
        ];
    }
}
