<?php

    namespace App\Repositories\User;

    interface UserRepository 
    {
        public function getAll();

        public function getById($id);

        public function create(array $attributes);
    }