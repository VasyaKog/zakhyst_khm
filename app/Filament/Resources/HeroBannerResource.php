<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroBannerResource\Pages;
use App\Models\HeroBanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HeroBannerResource extends Resource
{
    use Translatable;
    protected static ?string $model = HeroBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Hero Банери';

    protected static ?string $modelLabel = 'Банер';

    protected static ?string $pluralModelLabel = 'Банери';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Placeholder::make('coded_slide_name')
                            ->label('Тип слайду')
                            ->content(fn($record) => $record?->coded_slide_name ?? 'Новий банер (фото + посилання)')
                            ->visible(fn($record) => $record !== null),

                        Forms\Components\FileUpload::make('image_path')
                            ->label('Зображення')
                            ->image()
                            ->disk('public')
                            ->directory('hero-banners')
                            ->visibility('public')
                            ->visible(fn($record) => !$record?->isCodedSlide())
                            ->required(fn($record) => !$record?->isCodedSlide()),

                        Forms\Components\TextInput::make('link_url')
                            ->label('Посилання (URL)')
                            ->url()
                            ->placeholder('https://example.com')
                            ->visible(fn($record) => !$record?->isCodedSlide()),

                        Forms\Components\TextInput::make('sort_order')
                            ->label('Порядок')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Активний')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('coded_slide_name')
                    ->label('Тип')
                    ->default('Фото банер')
                    ->sortable(false),
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Зображення')
                    ->circular()
                    ->defaultImageUrl(fn($record) => $record->isCodedSlide() ? asset('images/icons/slide-icon.svg') : null),
                Tables\Columns\TextColumn::make('link_url')
                    ->label('Посилання')
                    ->limit(30)
                    ->placeholder('—'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Порядок')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Активний')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->visible(fn($record) => !$record->isCodedSlide()),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroBanners::route('/'),
            'create' => Pages\CreateHeroBanner::route('/create'),
            'edit' => Pages\EditHeroBanner::route('/{record}/edit'),
        ];
    }
}
