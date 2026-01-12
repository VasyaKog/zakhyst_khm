<?php

namespace App\Filament\Resources\HeroBannerResource\Pages;

use App\Filament\Resources\HeroBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroBanner extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HeroBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
