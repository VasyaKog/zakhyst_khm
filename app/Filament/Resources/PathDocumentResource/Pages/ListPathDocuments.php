<?php

namespace App\Filament\Resources\PathDocumentResource\Pages;

use App\Filament\Resources\PathDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPathDocuments extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PathDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
