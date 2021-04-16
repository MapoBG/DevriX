<?php
require_once 'common.php';

$error = '';

if(isset($_POST['create'])) {
    $title = htmlspecialchars($_POST['title']);
    $company = htmlspecialchars($_POST['company']);
    $salary = htmlspecialchars($_POST['salary']);
    $description = htmlspecialchars ($_POST['description']);

    $itemDTO = new \Data\Items\ItemDTO($title, $company, $salary, $description, -1);

    $itemService = new \Services\Items\ItemService(
        new \Repositories\Items\ItemRepository($db)
    );

    try {
        $itemService->createNewItem($itemDTO);
        header('Location: index.php');
        exit;
    } catch (Exception $e){
        $error = $e->getMessage();
    }
}
require_once 'views/create.php';
