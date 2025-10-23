<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'comment_text' => $this->comment_text,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'news' => NewsResource::collection($this->whenLoaded('news')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
