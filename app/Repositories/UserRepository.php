<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;

class UserRepository implements UserInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all(array $data)
    {
        $users = $this->user::paginate(10);
        return $users;
    }

    public function store(array $data)
    {
        dd('store');
    }

    public function update(array $data)
    {
        dd('update');
    }

    public function delete(int $userId)
    {
        dd('delete');
    }
}
