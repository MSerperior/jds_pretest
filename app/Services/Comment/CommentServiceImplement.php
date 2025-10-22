<?php

namespace App\Services\Comment;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Comment\CommentRepository;

class CommentServiceImplement extends ServiceApi implements CommentService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
     protected string $title = "";
     /**
     * uncomment this to override the default message
     * protected string $create_message = "";
     * protected string $update_message = "";
     * protected string $delete_message = "";
     */

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected CommentRepository $mainRepository;

    public function __construct(CommentRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
