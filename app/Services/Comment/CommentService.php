<?php

namespace App\Services\Comment;

use LaravelEasyRepository\BaseService;

interface CommentService extends BaseService{

    // Write something awesome :)

    /**
     * Return items with simple pagination
     * @param int $limit
     * @return mixed
     */
    public function simplePaginate($limit);
}
