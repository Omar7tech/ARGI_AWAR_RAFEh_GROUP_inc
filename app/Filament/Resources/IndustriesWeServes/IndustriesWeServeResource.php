<?php

namespace App\Filament\Resources\IndustriesWeServes;

use App\Filament\Resources\IndustriesWeServes\Pages\CreateIndustriesWeServe;
use App\Filament\Resources\IndustriesWeServes\Pages\EditIndustriesWeServe;
use App\Filament\Resources\IndustriesWeServes\Pages\ListIndustriesWeServes;
use App\Filament\Resources\IndustriesWeServes\Schemas\IndustriesWeServeForm;
use App\Filament\Resources\IndustriesWeServes\Tables\IndustriesWeServesTable;
use App\Models\IndustriesWeServe;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IndustriesWeServeResource extends Resource
{
    protected static ?string $model = IndustriesWeServe::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return IndustriesWeServeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IndustriesWeServesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListIndustriesWeServes::route('/'),
            'create' => CreateIndustriesWeServe::route('/create'),
            'edit' => EditIndustriesWeServe::route('/{record}/edit'),
        ];
    }
}
