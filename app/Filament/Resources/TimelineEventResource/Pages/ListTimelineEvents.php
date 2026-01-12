<?php

namespace App\Filament\Resources\TimelineEventResource\Pages;

use App\Filament\Resources\TimelineEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimelineEvents extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TimelineEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
