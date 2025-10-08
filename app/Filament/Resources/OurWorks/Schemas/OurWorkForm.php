<?php

namespace App\Filament\Resources\OurWorks\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OurWorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('description'),
                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Upload Images')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('ourworks')
                    ->image()
                    ->downloadable()
                    ->collection('ourworks')
                    ->openable()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                        '3:4',
                    ])
                    ->maxSize(1024)
                    ->columnSpanFull()
            ]);
    }
}
