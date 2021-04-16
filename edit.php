<?php
require_once 'secure_common.php';

$error = '';

if (isset($_GET['id'])){
    $itemService = new \Services\Items\ItemService(
        new \Repositories\Items\ItemRepository($db)
    );

    $id = $_GET['id'];
    $item = $itemService->findById($id);

}

if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $title = htmlspecialchars($_POST['title']);
    $company = htmlspecialchars($_POST['company']);
    $salary = htmlspecialchars($_POST['salary']);
    $description = htmlspecialchars ($_POST['description']);

    $itemDTO = new \Data\Items\ItemDTO($title, $company, $salary, $description, $id);

    $itemService = new \Services\Items\ItemService(
        new \Repositories\Items\ItemRepository($db)
    );

    try {
        $itemService->editItem($itemDTO, $id);
        header('Location: admin.php');
        exit;
    } catch (Exception $e){
        $error = $e->getMessage();
    }
}

require_once 'views/admins/edit.php';