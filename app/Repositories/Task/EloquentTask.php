<?php

    namespace App\Repositories\Task;

    use App\Models\Task;

    class EloquentTask implements TaskRepository
    {
        private $model;

        public function __construct(Task $model)
        {
            $this->model = $model;
        }

        public function getById($id)
        {
            return $this->model->findOrFail($id);
        }

        public function update($id, array $attributes)
        {
            $task = $this->getById($id);
            $task->update($attributes);

            return $task;
        }
    }