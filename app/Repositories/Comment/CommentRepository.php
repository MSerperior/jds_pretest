<?php

namespace App\Repositories\Comment;

use LaravelEasyRepository\Repository;

interface CommentRepository extends Repository{

    // Write something awesome :)

    /**
     * Return items with simple pagination
     * @param int $limit
     * @return mixed
     */
    public function simplePaginate($limit);
}
