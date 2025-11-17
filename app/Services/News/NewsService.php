<?php

namespace App\Services\News;

use LaravelEasyRepository\BaseService;

interface NewsService extends BaseService{

    // Write something awesome :)

    /**
     * Find an item by id with Comments
     * @param mixed $id
     * @return Model|null
     */
    public function findWithComments($id);
    
    /**
     * Find an item by id with Comments and comment user
     * @param mixed $id
     * @return Model|null
     */
    public function findWithCommentsAndUserComment($id);

    /**
     * Find an item by id with relations
     * @param mixed $id
     * @return Model|null
     */
    public function findWithRelations($id);

    /**
     * Return items with simple pagination
     * @param str $slug
     * @return mixed
     */
    public function findBySlugWithRelations($slug);

    /**
     * Return items with simple pagination
     * @param Request $request
     * @return mixed
     */
    public function simplePaginate($request);
}
