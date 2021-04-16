<?php
require_once 'secure_common.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $itemService = new \Services\Items\ItemService(
        new \Repositories\Items\ItemRepository($db)
    );

    try {
        $itemService->deleteById($id);
        header('Location: admin.php');
    }catch (Exception $e){
        echo $e->getMessage();
    }
}