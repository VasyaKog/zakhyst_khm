<?php

namespace App\Filament\Resources\HeroBannerResource\Pages;

use App\Filament\Resources\HeroBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroBanner extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HeroBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
