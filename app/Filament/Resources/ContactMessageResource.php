<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Повідомлення';
    protected static ?string $pluralModelLabel = 'Повідомлення';
    protected static ?string $modelLabel = 'Повідомлення';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_read', false)->count() ?: null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Деталі повідомлення')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Ім\'я')
                            ->disabled(), // Read-only
                        Forms\Components\TextInput::make('surname')
                            ->label('Прізвище')
                            ->disabled(),
                        Forms\Components\TextInput::make('contact')
                            ->label('Контакт (Email/Телефон)')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('created_at')
                            ->label('Отримано')
                            ->disabled(),
                        Forms\Components\Textarea::make('message')
                            ->label('Повідомлення')
                            ->rows(5)
                            ->columnSpanFull()
                            ->disabled(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('is_read')
                    ->label('Статус')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-envelope')
                    ->trueColor('success')
                    ->falseColor('warning')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Ім\'я')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('contact')
                    ->label('Контакт')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\Filter::make('unread')
                    ->label('Тільки непрочитані')
                    ->query(fn(Builder $query): Builder => $query->where('is_read', false))
                    ->default(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('mark_read')
                    ->label('Прочитано')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->action(fn(ContactMessage $record) => $record->update(['is_read' => true]))
                    ->visible(fn(ContactMessage $record) => !$record->is_read),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('mark_read')
                        ->label('Позначити прочитаним')
                        ->icon('heroicon-o-check')
                        ->action(fn(Collection $records) => $records->each->update(['is_read' => true])),
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
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
