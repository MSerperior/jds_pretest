<?php

namespace App\Repositories\News;

use Illuminate\Database\Eloquent\Model;
use LaravelEasyRepository\Repository;

interface NewsRepository extends Repository{

    // Write something awesome :)

    /**
     * Find an item by id with comments
     * @param mixed $id
     * @return Model|null
     */
    public function findWithComments($id);

    /**
     * Find an item by id with comments and comment owner
     * @param mixed $id
     * @return Model|null
     */
    public function findWithCommentsAndUserComment($id);

    /**
     * Return items with simple pagination
     * @param int $limit
     * @return mixed
     */
    public function simplePaginate($limit);
}
