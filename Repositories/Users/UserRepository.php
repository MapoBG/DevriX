<?php
namespace Repositories\Users;

use Data\Users\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{
    private DatabaseInterface $db;

    /**
     * UserRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function getAll(): \Generator
    {
        return $this->db->query("SELECT * FROM admins")->execute()->fetch();
    }

    public function registerUser(UserDTO $userDTO)
    {
        $this->db->query("INSERT INTO admins (username, password) VALUES (?, ?)")
            ->execute([$userDTO->getUsername(), $userDTO->getPassword()]);
    }

    public function getByUsername(string $username): UserDTO
    {
       $user = $this->db->query("SELECT * FROM admins WHERE username = ?")->execute([$username])->fetch();
       $user = $user->current();

       return new UserDTO($user['id'], $user['username'], $user['password'], '');
    }

    public function getById(int $id): UserDTO
    {
        $user = $this->db->query("SELECT * FROM admins WHERE id = ?")->execute([$id])->fetch();
        $user = $user->current();

        return new UserDTO($user['id'], $user['username'], $user['password'], '');
    }
}