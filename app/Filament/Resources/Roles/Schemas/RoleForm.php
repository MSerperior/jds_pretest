<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('guard_name')
                    ->required(),
                CheckboxList::make('permissions')
                ->relationship('permissions', 
                titleAttribute: 'name', 
                modifyQueryUsing: fn (Builder $query) => $query->orderBy('name'))
                ->columns(3)
                ->columnSpanFull(),
            ]);
    }
}
