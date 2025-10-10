<?php

namespace App\Filament\Resources\IndustriesWeServes\Pages;

use App\Filament\Resources\IndustriesWeServes\IndustriesWeServeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIndustriesWeServes extends ListRecords
{
    protected static string $resource = IndustriesWeServeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
