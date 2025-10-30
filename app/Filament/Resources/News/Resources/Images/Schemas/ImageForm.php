<?php

namespace App\Filament\Resources\News\Resources\Images\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image_path')
                    ->required()
                    ->image()
                    ->columnSpanFull(),
            ]);
    }
}
