<?php
require_once 'secure_common.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $itemService = new \Services\Items\ItemService(
        new \Repositories\Items\ItemRepository($db)
    );

    try {
        $itemDTO = $itemService->findById($id);
        $itemDTO->setApproved('true');

        $itemService->editItem($itemDTO, $id);
        header('Location: admin.php');
    } catch(Exception $e) {
        echo $e->getMessage();
    }

}