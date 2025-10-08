<?php

namespace App\Filament\Resources\OurWorks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class OurWorksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    SpatieMediaLibraryImageColumn::make('image')->size(100),
                    ToggleColumn::make('active'),
                    TextColumn::make('title')
                        ->searchable()->placeholder('no title'),
                    TextColumn::make('description')->placeholder('no description')
                        ->searchable(),

                ])

            ])->contentGrid([
                    'md' => 2,
                    'xl' => 3,
                ])
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')

            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
