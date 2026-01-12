<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Filament\Resources\TeamMemberResource\RelationManagers;
use App\Models\TeamMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamMemberResource extends Resource
{
    use Translatable;

    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Команда';

    protected static ?string $modelLabel = 'Член команди';

    protected static ?string $pluralModelLabel = 'Члени команди';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label("Ім'я")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->label('Прізвище')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                    ->label('Посада')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photo')
                    ->label('Фото')
                    ->image()
                    ->disk('public')
                    ->directory('images/team')
                    ->visibility('public'),
                Forms\Components\Toggle::make('is_partner')
                    ->label('Партнер (не основна команда)')
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Порядок')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_active')
                    ->label('Активний')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Фото')
                    ->circular(),
                Tables\Columns\TextColumn::make('first_name')
                    ->label("Ім'я")
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Прізвище')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role')
                    ->label('Посада')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_partner')
                    ->label('Партнер')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Порядок')
                    ->numeric()
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
