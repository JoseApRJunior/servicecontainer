<?php

namespace app\library;

use app\interfaces\UserRepositoryInterface;
use core\Application;

class Auth
{
    public function __construct(
        private NewsLetter $newsLetter
    ) {}
    public function auth()
    {
        var_dump($this->newsLetter->send());
    }
}
