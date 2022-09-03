<?php

    namespace App\Repositories\User;

    use App\Models\User;

    class EloquentUser implements UserRepository
    {
        private $model;

        public function __construct(User $model)
        {
            $this->model = $model;
        }

        public function getAll()
        {
            return $this->model->all();
        }

        public function getById($id)
        {
            return $this->model->findOrFail($id);
        }

        public function create(array $attributes)
        {
            return $this->model->create($attributes);
        }
    }