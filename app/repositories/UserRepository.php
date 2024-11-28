<?php

namespace app\repositories;

use app\interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function find($id)
    {
        var_dump("Repository -> UserRepository -> Method -> find -> $id");
    }
}
