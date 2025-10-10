<?php

namespace App\Filament\Resources\IndustriesWeServes\Pages;

use App\Filament\Resources\IndustriesWeServes\IndustriesWeServeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIndustriesWeServe extends EditRecord
{
    protected static string $resource = IndustriesWeServeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
