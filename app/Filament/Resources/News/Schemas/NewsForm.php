<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('news_title')
                    ->required(),
                Textarea::make('news_content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('news_image')
                    ->required()
                    ->image()
                    ->columnSpanFull(),
            ]);
    }
}
