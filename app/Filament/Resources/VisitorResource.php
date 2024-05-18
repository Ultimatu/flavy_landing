<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorResource\Pages;
use App\Filament\Resources\VisitorResource\RelationManagers;
use App\Models\Visitor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisitorResource extends Resource
{
    protected static ?string $model = Visitor::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    protected static ?string $activeNavigationIcon = 'heroicon-s-eye';

    protected static ?string $navigationGroup = 'Utilisateurs';

    protected static ?string $navigationLabel = 'Visiteurs';

    protected static ?string $modelLabel = 'Visiteur';

    protected static ?string $pluralModelLabel = 'Visiteurs';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function canUpdate($record): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('ip_address')
                //     ->required()
                //     ->maxLength(45),
                // Forms\Components\TextInput::make('visits')
                //     ->required()
                //     ->numeric(),
                // Forms\Components\TextInput::make('country')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('city')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('region')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('postal_code')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip_address')
                    ->label('Adresse IP')
                    ->badge()
                    ->icon('heroicon-s-globe-alt')
                    ->color('success')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('visits')
                    ->numeric()
                    ->label('Nombre de visites')
                    ->badge()
                    ->icon('heroicon-s-eye')
                    ->color(fn ($state) => match ($state) {
                        100 => 'success',
                        $state > 50 => 'warning',
                        $state > 20 => 'info',
                        $state > 10 => 'danger',
                        default => 'primary',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('country')
                    ->label('Pays')
                    ->badge()
                    ->color('warning')
                    ->icon('heroicon-s-globe-alt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->label('Ville')
                    ->badge()
                    ->color('info')
                    ->icon('heroicon-s-map-pin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('region')
                    ->label('Région')
                    ->badge()
                    ->color('info')
                    ->icon('heroicon-s-map-pin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('postal_code')
                    ->label('Code postal')
                    ->badge()
                    ->color('info')
                    ->icon('heroicon-s-envelope')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_agent')
                    ->label('Navigateur')
                    ->icon('heroicon-s-browser')
                    ->badge()
                    ->color('primary')
                    ->searchable(),
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
            'index' => Pages\ListVisitors::route('/'),
            'create' => Pages\CreateVisitor::route('/create'),
            'edit' => Pages\EditVisitor::route('/{record}/edit'),
        ];
    }
}
