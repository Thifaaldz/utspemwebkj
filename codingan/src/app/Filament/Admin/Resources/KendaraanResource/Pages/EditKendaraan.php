<?php

namespace App\Filament\Admin\Resources\KendaraanResource\Pages;

use App\Filament\Admin\Resources\KendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKendaraan extends EditRecord
{
    protected static string $resource = KendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
