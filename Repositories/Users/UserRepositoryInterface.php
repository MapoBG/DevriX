<?php
namespace Repositories\Users;

use Data\Users\UserDTO;

interface UserRepositoryInterface
{
    public function getAll(): \Generator;

    public function registerUser(UserDTO $userDTO);

    public function getByUsername(string $username): UserDTO;

    public function getById(int $id): UserDTO;
}