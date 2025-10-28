<?php

namespace App\Filament\Resources\News\Resources\Comments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CommentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('user_uuid')
                //     ->required(),
                Textarea::make('comment_text')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
