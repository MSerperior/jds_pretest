<?php

namespace App\Services\News;

use LaravelEasyRepository\BaseService;

interface NewsService extends BaseService{

    // Write something awesome :)

    public function findWithComments($id);
    
    public function findWithCommentsAndUserComment($id);

    public function simplePaginate($limit);
}
