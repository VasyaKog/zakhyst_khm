<?php

namespace App\Filament\Resources\PathDocumentResource\Pages;

use App\Filament\Resources\PathDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePathDocument extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PathDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
