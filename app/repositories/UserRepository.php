<?php

namespace app\repositories;

use app\interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return "Retrieving user with ID: $id";
    }
}
