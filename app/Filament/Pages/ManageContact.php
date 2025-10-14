<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageContact extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = ContactSettings::class;


    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([

                Tabs::make('Contact Information')
                    ->tabs([

                        Tab::make('Email Addresses')
                            ->icon('heroicon-o-envelope')
                            ->schema([
                                Repeater::make('emails')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label / Department')
                                            ->placeholder('e.g., General Inquiries, Support, Sales')

                                            ->maxLength(100)
                                            ->columnSpan(1),
                                        TextInput::make('email')
                                            ->label('Email Address')
                                            ->email()
                                            ->required()
                                            ->placeholder('example@company.com')
                                            ->columnSpan(1),
                                    ])
                                    ->columns(2)

                                    ->addActionLabel('Add Email')
                                    ->reorderableWithButtons()
                                    ->collapsible()
                                    ->columnSpan('full'),
                            ]),

                        Tab::make('Phone Numbers')
                            ->icon('heroicon-o-phone')
                            ->schema([
                                Repeater::make('phone_numbers')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label / Location')
                                            ->placeholder('e.g., Main Office, Mobile, Emergency')
                                            ->required()
                                            ->maxLength(100)
                                            ->columnSpan(1),
                                        TextInput::make('phone_number')
                                            ->label('Phone Number')
                                            ->tel()
                                            ->required()
                                            ->placeholder('+961387946')
                                            ->columnSpan(1),
                                    ])
                                    ->columns(2)

                                    ->addActionLabel('Add Phone Number')
                                    ->reorderableWithButtons()
                                    ->collapsible()
                                    ->columnSpan('full'),
                            ]),

                        Tab::make('Social Media')
                            ->icon('heroicon-o-share')
                            ->schema([
                                Repeater::make('social_media')
                                    ->schema([
                                        TextInput::make('platform')
                                            ->label('Platform Name')
                                            ->placeholder('e.g., Facebook, LinkedIn, Twitter')
                                            ->maxLength(50)
                                            ->columnSpan(1),
                                        TextInput::make('icon_url')
                                            ->label('Icon URL')
                                            ->placeholder('https://example.com/icon.png')
                                            ->helperText(' paste icon URL from web here')
                                            ->columnSpan(1),
                                        TextInput::make('url')
                                            ->label('Profile URL')
                                            ->required()
                                            ->placeholder('https://facebook.com/yourpage')
                                            ->columnSpan('full'),
                                    ])
                                    ->columns(2)
                                    ->addActionLabel('Add Social Media')
                                    ->reorderableWithButtons()
                                    ->collapsible()
                                    ->columnSpan('full'),
                            ]),

                        Tab::make('Business Hours')
                            ->icon('heroicon-o-clock')
                            ->schema([
                                Textarea::make('business_hours')
                                    ->label('Working Hours')
                                    ->placeholder("Monday - Friday: 8:00 AM - 6:00 PM\nSaturday: 9:00 AM - 2:00 PM\nSunday: Closed")
                                    ->rows(6)
                                    ->helperText('Enter your business hours. Use line breaks for better formatting.')
                                    ->columnSpan('full'),
                            ]),

                    ])
                    ->columnSpan('full')
                    ,
            ]);
    }
}
