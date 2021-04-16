<?php
namespace Repositories\Items;

use Data\Items\ItemDTO;

interface ItemRepositoryInterface
{

    public function getAll(): \Generator;

    public function createItem(ItemDTO $itemDTO);

    public function getById(int $id): ItemDTO;

    public function editItem(ItemDTO $itemDTO, int $id);

    public function deleteItem(int $id);

    public function getAllApproved(): \Generator;
}