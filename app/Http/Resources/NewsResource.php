<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class NewsResource extends JsonResource
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
            'news_title' => $this->news_title,
            'news_content' => $this->news_content,
            'news_slug' => $this->news_slug,
            'news_image' => $this->news_image ? (str_starts_with($this->news_image, 'http') ? $this->news_image : Storage::disk('local')->temporaryUrl($this->news_image, now()->addMinutes(5))) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'comments_count' => $this->whenCounted('comments'),

            'images' => ImageResource::collection($this->whenLoaded('images')),
            'thubmnail' => new ImageResource($this->whenLoaded('thumbnail')),
        ];
    }
}
