<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
                RichEditor::make('news_content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('images')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->multiple()
                    ->saveRelationshipsUsing(function ($component, $state, $record) {
                        foreach ($state as $filePath) {
                            $record->images()->create([
                                'image_path' => $filePath,
                                // 'original_name' => $component->getStatePath('original_name')[$filePath] ?? null,
                            ]);
                        }
                    }),
            ]);
    }
}
