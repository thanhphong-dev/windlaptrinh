<?php

namespace App\Interfaces;

interface UserRepositoryInferface
{
    public function getAll();

    public function add(array $data);
}
