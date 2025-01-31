<?php

namespace App\Filament\Resources\FreteResource\RelationManagers;

use App\Enums\FreteStatus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EtapasRelationManager extends RelationManager
{
    protected static string $relationship = 'etapas';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('descricao')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tipo_etapa')
                    ->label('Tipo da Etapa')
                    ->options(FreteStatus::toNameValueArray())
                    ->required()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('descricao')
            ->columns([
                Tables\Columns\TextColumn::make('descricao'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->visible(function() {
                        $frete = $this->getOwnerRecord();

                        return $frete->status !== FreteStatus::ENTREGUE;
                    })
                    ->after(function(Model $etapa) {
                        $tipoEtapa = $this->mountedTableActionsData[0]['tipo_etapa'];
                        $novoFreteStatus = FreteStatus::fromName($tipoEtapa);

                        $etapa->frete->update(['status' => $novoFreteStatus]);

                        return redirect(request()->header('Referer'));
                    }),
            ])
            ->actions([
              
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
