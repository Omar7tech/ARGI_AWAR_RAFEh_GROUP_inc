<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Upload Image')
                    ->disk('public')
                    ->visibility('public')
                    ->image()
                    ->downloadable()
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
                    ->columnSpanFull(),

                TextInput::make('name')
                    ->required(),
                Toggle::make('active')
                    ->required(),
                RichEditor::make('description')
                    ->columnSpanFull()->toolbarButtons([
                            ['bold', 'italic', 'underline', 'highlight' , 'details' , 'strike', 'subscript', 'superscript', 'link' , 'textColor'],
                            ['grid' , 'gridDelete'],
                            ['clearFormatting'] ,
                            ['h1' , 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd' , 'lead'],
                            ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                            ['table'],
                            ['undo', 'redo'],
                        ]),
            ]);
    }
}
