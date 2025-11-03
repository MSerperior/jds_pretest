<?php

namespace App\Filament\Resources\Roles\Resources\Permissions\Pages;

use App\Filament\Resources\Roles\Resources\Permissions\PermissionResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePermission extends CreateRecord
{
    protected static string $resource = PermissionResource::class;
}
