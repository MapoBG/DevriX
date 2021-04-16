<?php
require_once 'common.php';

$error = '';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rePass = $_POST['rePass'];

    $userService = new \Services\Users\UserService(
        new \Repositories\Users\UserRepository($db),
        new \Services\Encryption\ArgonEncryptionService()
    );

    $userDTO = new \Data\Users\UserDTO(-1, $username, $password, $rePass);

    try {
        $userService->registerUser($userDTO);
        header('Location: login.php');
        exit;
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

require_once 'views/users/register.php';