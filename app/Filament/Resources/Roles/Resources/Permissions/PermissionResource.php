<?php

namespace App\Filament\Resources\Roles\Resources\Permissions;

use App\Filament\Resources\Roles\Resources\Permissions\Pages\CreatePermission;
use App\Filament\Resources\Roles\Resources\Permissions\Pages\EditPermission;
use App\Filament\Resources\Roles\Resources\Permissions\Schemas\PermissionForm;
use App\Filament\Resources\Roles\Resources\Permissions\Tables\PermissionsTable;
use App\Filament\Resources\Roles\RoleResource;
use App\Models\Permission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = RoleResource::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PermissionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PermissionsTable::configure($table);
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
            'create' => CreatePermission::route('/create'),
            'edit' => EditPermission::route('/{record}/edit'),
        ];
    }
}
