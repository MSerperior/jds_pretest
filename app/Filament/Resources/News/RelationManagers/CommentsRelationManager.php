<?php

namespace App\Filament\Resources\News\RelationManagers;

use App\Filament\Resources\News\NewsResource;
use App\Filament\Resources\News\Resources\Comments\CommentResource;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class CommentsRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';

    protected static ?string $relatedResource = CommentResource::class;

    protected static ?string $parentResource = NewsResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }

}
