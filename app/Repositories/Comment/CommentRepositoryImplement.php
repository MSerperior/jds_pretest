<?php

namespace App\Repositories\Comment;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Comment;

class CommentRepositoryImplement extends Eloquent implements CommentRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected Comment $model;

    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);   
    }

    public function all()
    {
        return $this->model->all();
    }

    public function simplePaginate($limit)
    {
      return $this->model->simplePaginate($limit);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }    

    public function update($id, array $data)
    {
        return $this->model->where('uuid', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->where('uuid', $id)->delete();
    }

    public function destroy(array $id)
    {
        return $this->model->destroy($id);
    }
}
