<?php
namespace Data\Users;

class UserDTO
{
    private $id;

    private $username;

    private $password;

    private $rePass;

    public function __construct($id, $username, $password, $rePass)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->rePass = $rePass;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRePass()
    {
        return $this->rePass;
    }

    /**
     * @param mixed $rePass
     */
    public function setRePass($rePass): void
    {
        $this->rePass = $rePass;
    }
}