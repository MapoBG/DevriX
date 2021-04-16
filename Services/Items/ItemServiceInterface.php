<?php
namespace Services\Items;

use Data\Items\ItemDTO;

interface ItemServiceInterface
{
    /**
     * @param ItemDTO $itemDTO
     * @throws \Exception
     */
    public function createNewItem(ItemDTO $itemDTO): void;

    /**
     * @param int $id
     * @return ItemDTO
     */
    public function findById(int $id): ItemDTO;


    /**
     * @param ItemDTO $itemDTO
     * @param $id
     * @throws \Exception
     */
    public function editItem(ItemDTO $itemDTO, $id): void;

    public function deleteById($id): void;
}