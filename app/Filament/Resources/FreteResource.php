<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreteResource\Pages;
use App\Filament\Resources\FreteResource\RelationManagers;
use App\Models\Frete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FreteResource extends Resource
{
    protected static ?string $model = Frete::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('origem')
                    ->required(),
                Forms\Components\TextInput::make('destino')
                    ->required(),
                Forms\Components\TextInput::make('codigo_rastreio')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\Select::make('remetente_id')
                    ->label('Remetente')
                    ->relationship('remetente', 'nome')
                    ->required(),
                Forms\Components\Select::make('destinatario_id')
                    ->label('Destinatário')
                    ->relationship('destinatario', 'nome')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('origem')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destino')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_rastreio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remetente.nome')
                    ->label('Remetente')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('destinatario.nome')
                    ->label('Destinatário')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de criação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Data última atualização')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFretes::route('/'),
            'create' => Pages\CreateFrete::route('/create'),
            'view' => Pages\ViewFrete::route('/{record}'),
            'edit' => Pages\EditFrete::route('/{record}/edit'),
        ];
    }
}
