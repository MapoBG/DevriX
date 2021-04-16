<?php
require_once 'common.php';

$error = '';

$itemRepo = new \Repositories\Items\ItemRepository($db);

$items = $itemRepo->getAll();

require_once 'views/index.php';