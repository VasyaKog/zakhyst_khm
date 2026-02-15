<?php

namespace App\Filament\Resources\PathDocumentResource\Pages;

use App\Filament\Resources\PathDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPathDocument extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PathDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
