<?php

namespace App\Filament\Resources\PendingAccountResource\Pages;

use App\Filament\Resources\PendingAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePendingAccounts extends ManageRecords
{
    protected static string $resource = PendingAccountResource::class;

//    protected function getHeaderActions(): array
//    {
//        return [
//            Actions\CreateAction::make(),
//        ];
//    }
}
