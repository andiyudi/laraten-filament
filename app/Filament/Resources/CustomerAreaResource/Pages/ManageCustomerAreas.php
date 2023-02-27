<?php

namespace App\Filament\Resources\CustomerAreaResource\Pages;

use App\Filament\Resources\CustomerAreaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCustomerAreas extends ManageRecords
{
    protected static string $resource = CustomerAreaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
