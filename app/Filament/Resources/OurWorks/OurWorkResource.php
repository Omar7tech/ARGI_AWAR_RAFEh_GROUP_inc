<?php

namespace App\Filament\Resources\OurWorks;

use App\Filament\Resources\OurWorks\Pages\CreateOurWork;
use App\Filament\Resources\OurWorks\Pages\EditOurWork;
use App\Filament\Resources\OurWorks\Pages\ListOurWorks;
use App\Filament\Resources\OurWorks\Schemas\OurWorkForm;
use App\Filament\Resources\OurWorks\Tables\OurWorksTable;
use App\Models\OurWork;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurWorkResource extends Resource
{
    protected static ?string $model = OurWork::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OurWorkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurWorksTable::configure($table);
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
            'index' => ListOurWorks::route('/'),
            'create' => CreateOurWork::route('/create'),
            'edit' => EditOurWork::route('/{record}/edit'),
        ];
    }
}
