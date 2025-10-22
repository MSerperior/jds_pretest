<?php

namespace App\Services\News;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\News\NewsRepository;

class NewsServiceImplement extends ServiceApi implements NewsService{

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
     protected NewsRepository $mainRepository;

    public function __construct(NewsRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)

    /**
     * Fin an item by id
     * @param mixed $id
     * @return Model|null
     */
    public function find($id)
    {
      return $this->mainRepository->find($id);
    }

    /**
     * find or fail
     * @param mixed $id
     * @return mixed
     */
    public function findOrFail($id)
    {
      return $this->mainRepository->findOrFail($id);
    }

    /**
     * Fin an item by id
     * @param mixed $id
     * @return Model|null
     */
    public function findWithComments($id)
    {
      return $this->mainRepository->findWithComments($id);
    }


    /**
     * Return all items
     * @return Collection|null
     */
    public function all()
    {
      return $this->mainRepository->all();
    }

    public function simplePaginate($limit)
    {
      return $this->mainRepository->simplePaginate($limit);
    }

    /**
     * Create an item
     * @param array|mixed $data
     * @return Model|null
     */
    public function create($data)
    {
      return $this->mainRepository->create($data);
    }

    /**
     * Update a model
     * @param int|mixed $id
     * @param array|mixed $data
     * @return bool|mixed
     */
    public function update($id, array $data)
    {
      return $this->mainRepository->update($id, $data);
    }

    /**
     * Delete a model
     * @param int|Model $id
     */
    public function delete($id)
    {
      return $this->mainRepository->delete($id);
    }

    /**
     * multiple delete
     * @param array $id
     * @return mixed
     */
    public function destroy(array $id)
    {
      return $this->mainRepository->destroy($id);
    }
}
