<?php

namespace App\Repositories\News;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\News;

class NewsRepositoryImplement extends Eloquent implements NewsRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected News $model;

    public function __construct(News $model)
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

    public function findWithComments($id)
    {
        return $this->model->with('comments')->find($id);
    }

    public function findWithCommentsAndUserComment($id)
    {
        return $this->model->with('comments', 'comments.user')->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function simplePaginate($limit)
    {
        return $this->model->paginate($limit);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $m = $this->model->find($id);

        return $m->update($data);
    }

    public function delete($id)
    {
        $m = $this->model->find($id);

        return $m->delete();
    }

    public function destroy(array $id)
    {
        return $this->model->destroy($id);
    }
}
