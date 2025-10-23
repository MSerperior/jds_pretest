<?php

namespace App\Repositories\News;

use Illuminate\Database\Eloquent\Model;
use LaravelEasyRepository\Repository;

interface NewsRepository extends Repository{

    // Write something awesome :)

    /**
     * Fin an item by id with comments
     * @param mixed $id
     * @return Model|null
     */
    public function findWithComments($id);

    public function findWithCommentsAndUserComment($id);

    public function simplePaginate($limit);
}
