<?php

namespace app\library;

use app\interfaces\UserRepositoryInterface;
use core\Application;

class Auth
{
    public function auth(
        UserRepositoryInterface $userRepository
    ) {
        dd($userRepository->find(12323));
    }
}
