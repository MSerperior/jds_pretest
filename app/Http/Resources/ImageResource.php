<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uuid,
            'image_path' => $this->image_path ? (str_starts_with($this->image_path, 'http') ? $this->image_path : Storage::disk('local')->temporaryUrl($this->image_path, now()->addMinutes(5))) : null,
            'image_caption' => $this->image_caption,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
