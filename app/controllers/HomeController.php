<?php

namespace app\controllers;

use app\repositories\UserRepository;

class HomeController
{
    public function __construct(
        private UserRepository $userRepository
    ) {}


    public function index()
    {
        var_dump('Controller -> HomeController -> Method -> index ');
        $this->userRepository->find(1);
    }
}
