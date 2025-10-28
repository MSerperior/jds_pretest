<?php

namespace App\Filament\Resources\News\Resources\Comments\Pages;

use App\Filament\Resources\News\Resources\Comments\CommentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateComment extends CreateRecord
{
    protected static string $resource = CommentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_uuid'] = auth()->user()->uuid;

        return $data;
    }
}
