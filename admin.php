<?php
require_once 'secure_common.php';

$error = '';

$itemRepo = new \Repositories\Items\ItemRepository($db);

$items = $itemRepo->getAll();

require_once 'views/admins/admin.php';