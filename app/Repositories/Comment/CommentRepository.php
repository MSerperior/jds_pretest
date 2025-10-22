<?php

namespace App\Repositories\Comment;

use LaravelEasyRepository\Repository;

interface CommentRepository extends Repository{

    // Write something awesome :)

    public function simplePaginate($limit);
}
