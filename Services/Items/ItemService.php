<?php
namespace Services\Items;


use Data\Items\ItemDTO;
use Repositories\Items\ItemRepositoryInterface;

class ItemService implements ItemServiceInterface
{

    private ItemRepositoryInterface $itemRepository;

    /**
     * ItemService constructor.
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }


    public function createNewItem(ItemDTO $itemDTO): void
    {
        if(!$itemDTO->getTitle() || !$itemDTO->getCompany() || !$itemDTO->getDescription() || !$itemDTO->getSalary()){
            throw new \Exception(message: "All fields must be filled");
        }

        if($itemDTO->getSalary() <= 0 || !is_numeric($itemDTO->getSalary())) {
            throw new \Exception(message: 'Salary must be a positive number');
        }

        $this->itemRepository->createItem($itemDTO);
    }

    public function findById(int $id): ItemDTO
    {
        return $this->itemRepository->getById($id);
    }

    public function editItem(ItemDTO $itemDTO, $id): void
    {
        if(!$itemDTO->getTitle() || !$itemDTO->getCompany() || !$itemDTO->getDescription() || !$itemDTO->getSalary()){
            throw new \Exception(message: "All fields must be filled");
        }

        if($itemDTO->getSalary() <= 0) {
            throw new \Exception(message: 'Salary must be a positive number');
        }

        $this->itemRepository->editItem($itemDTO, $id);
    }

    public function deleteById($id): void
    {
        $this->itemRepository->deleteItem($id);
    }
}