<?php

    namespace App\Repositories\Task;

    interface TaskRepository
    {
        public function getBYId($id);
        
        public function update($id, array $attributes);
    }