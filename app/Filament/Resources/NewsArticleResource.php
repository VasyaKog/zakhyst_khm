<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsArticleResource\Pages;
use App\Filament\Resources\NewsArticleResource\RelationManagers;
use App\Models\NewsArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsArticleResource extends Resource
{
    use Translatable;

    protected static ?string $model = NewsArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Новини';

    protected static ?string $modelLabel = 'Новина';

    protected static ?string $pluralModelLabel = 'Новини';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Основна інформація')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->label('URL-адреса (slug)')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('summary')
                            ->label('Короткий опис')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('content')
                            ->label('Зміст статті')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('author')
                            ->label('Автор')
                            ->maxLength(255),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Дата публікації'),
                    ]),

                Forms\Components\Section::make('Медіа')
                    ->schema([
                        Forms\Components\FileUpload::make('image_url')
                            ->label('Головне зображення')
                            ->image()
                            ->disk('public')
                            ->directory('images/backgrounds')
                            ->visibility('public'),
                        Forms\Components\TextInput::make('video_url')
                            ->label('Посилання на відео (YouTube або інше)')
                            ->helperText('Вставте посилання з YouTube або пряме посилання на відеофайл')
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('video_path')
                            ->label('Завантажити відео')
                            ->disk('public')
                            ->directory('videos')
                            ->visibility('public')
                            ->maxSize(51200) // 50MB
                            ->acceptedFileTypes(['video/mp4', 'video/quicktime', 'video/webm']),
                    ]),

                Forms\Components\Section::make('Галерея фото')
                    ->description('Налаштуйте галерею та позицію показу фото у статті')
                    ->schema([
                        Forms\Components\FileUpload::make('gallery_images')
                            ->label('Фото галереї')
                            ->helperText('1 фото = повна ширина, 2 = поряд, 3 = рівномірно')
                            ->multiple()
                            ->disk('public')
                            ->directory('images/backgrounds')
                            ->visibility('public')
                            ->reorderable()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('gallery_position')
                            ->label('Показати галерею після абзацу №')
                            ->helperText('Залиште порожнім для показу в кінці статті')
                            ->numeric()
                            ->minValue(1),
                        Forms\Components\TextInput::make('inline_photo_position')
                            ->label('Показати перше фото галереї окремо після абзацу №')
                            ->helperText('Фото буде відображено з обтіканням тексту')
                            ->numeric()
                            ->minValue(1),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Зображення'),
                Tables\Columns\TextColumn::make('author')
                    ->label('Автор')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Опубліковано')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Створено')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Оновлено')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsArticles::route('/'),
            'create' => Pages\CreateNewsArticle::route('/create'),
            'edit' => Pages\EditNewsArticle::route('/{record}/edit'),
        ];
    }
}
