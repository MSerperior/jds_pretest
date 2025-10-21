<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'news_title' => $this->news_title,
            'news_content' => $this->news_content,
            'news_image' => $this->news_image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'comments_count' => $this->whenCounted('comments'),
        ];
    }
}
