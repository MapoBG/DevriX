<?php
require_once 'common.php';

$error = '';

if (isset($_GET['id'])){
    $itemRepo = new \Repositories\Items\ItemRepository($db);

    $id = $_GET['id'];

    $item = $itemRepo->getById($id);
    $lines = explode("\n", $item->getDescription());

    $allItems = $itemRepo->getAll();
    $allItems = iterator_to_array($allItems);

    $filtered = array_filter($allItems, function ($i) {
        global $id;

        return $i['id'] !== $id;
    });
}

require_once 'views/details.php';