<?php

namespace App\Repositories\Contracts;

interface UserInterface
{
    public function all(array $data);
    public function store(array $data);
    public function update(array $data);
    public function delete(int $userId);
}
