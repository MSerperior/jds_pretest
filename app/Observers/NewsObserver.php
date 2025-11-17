<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\News;

class NewsObserver
{
    /**
     * Handle the News "created" event.
     */
    public function created(News $news): void
    {
        // Log::create([
        //     'level' => 'INFO',
        //     'user_uuid' => request()->user()->uuid,
        //     'detail' => 'Created News with ID '. $news->uuid,
        // ]);
    }

    /**
     * Handle the News "updated" event.
     */
    public function updated(News $news): void
    {
        Log::create([
            'level' => 'INFO',
            'user_uuid' => request()->user()->uuid,
            'detail' => 'Updated News with ID '. $news->uuid,
        ]);
    }

    /**
     * Handle the News "deleted" event.
     */
    public function deleted(News $news): void
    {
        Log::create([
            'level' => 'INFO',
            'user_uuid' => request()->user()->uuid,
            'detail' => 'Deleted News with ID '. $news->uuid,
        ]);
    }

    /**
     * Handle the News "restored" event.
     */
    public function restored(News $news): void
    {
        Log::create([
            'level' => 'INFO',
            'user_uuid' => request()->user()->uuid,
            'detail' => 'Restored News with ID '. $news->uuid,
        ]);
    }

    /**
     * Handle the News "force deleted" event.
     */
    public function forceDeleted(News $news): void
    {
        Log::create([
            'level' => 'INFO',
            'user_uuid' => request()->user()->uuid,
            'detail' => 'Force Deleted News with ID '. $news->uuid,
        ]);
    }
}
