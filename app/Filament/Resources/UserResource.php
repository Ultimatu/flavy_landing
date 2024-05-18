<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Utilisateurs';

    protected static ?string $navigationLabel = 'Utilisateurs';
    protected static ?string $modelLabel = 'Utilisateur';


    public static function canDelete($record): bool
    {
        return User::count() > 1 && $record->id !== auth()->id();
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom complet')
                    ->prefixIcon('heroicon-s-user')
                    ->prefixIconColor('success')
                    ->hint('Votre nom complet')
                    ->hintColor('primary')
                    ->hintIcon('heroicon-s-information-circle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Adresse e-mail')
                    ->prefixIcon('heroicon-s-envelope')
                    ->prefixIconColor('primary')
                    ->hint('Votre adresse e-mail')
                    ->hintColor('info')
                    ->hintIcon('heroicon-s-information-circle')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->revealable()
                    ->minLength(6)
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Aucun utilisateur trouvé')
            ->emptyStateDescription('Vous n\'avez pas encore ajouté d\'utilisateur.')
            ->emptyStateIcon('heroicon-s-user-minus')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom complet')
                    ->icon('heroicon-s-user')
                    ->color('success')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->icon('heroicon-s-envelope')
                    ->color('primary')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->label('Vérifié le')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
