<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageContact extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = ContactSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('emails')
                    ->schema([
                        TextInput::make('label'),
                        TextInput::make('email')->required(),
                    ])
                    ->columns(2),

                Repeater::make('phone_numbers')
                    ->schema([
                        TextInput::make('label'),
                        TextInput::make('phone_number')->required(),
                    ])
                    ->columns(2),
                Repeater::make('social_media')
                    ->schema([
                        TextInput::make('icon_url'),
                        TextInput::make('url')->required(),
                    ])
                    ->columns(2),

                 Textarea::make('business_hours')
            ]);
    }
}
