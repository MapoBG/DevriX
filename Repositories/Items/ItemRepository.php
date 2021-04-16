<?php
namespace Repositories\Items;

use Data\Items\ItemDTO;
use Database\DatabaseInterface;

class ItemRepository implements ItemRepositoryInterface
{
    private DatabaseInterface $db;

    /**
     * ItemRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function getAll(): \Generator
    {
        return $this->db->query("SELECT * FROM job_offers ORDER BY posted_on DESC ")->execute()->fetch();
    }

    public function createItem(ItemDTO $itemDTO)
    {
        $params = [
            $itemDTO->getTitle(),
            $itemDTO->getCompany(),
            $itemDTO->getSalary(),
            $itemDTO->getDescription(),
        ];

        $this->db->query("INSERT INTO job_offers(title, company, salary, description) VALUES (?, ?, ?, ?)")
            ->execute($params);
    }

    public function getById(int $id): ItemDTO
    {
        $item = $this->db->query("SELECT * FROM job_offers WHERE id = ?")->execute([$id])->fetch();
        $item = $item->current();

        return new ItemDTO($item['title'], $item['company'], $item['salary'], $item['description'], $item['posted_on'], $item['approved']);
    }

    public function editItem(ItemDTO $itemDTO, int $id)
    {
        $params = [
            $itemDTO->getTitle(),
            $itemDTO->getCompany(),
            $itemDTO->getSalary(),
            $itemDTO->getDescription(),
            $itemDTO->getApproved(),
            $id
        ];

        $this->db->query("UPDATE job_offers SET title=?, company=?, salary=?, description=?, approved=? WHERE id = ?")
            ->execute($params);
    }

    public function deleteItem(int $id)
    {
        $this->db->query("DELETE FROM job_offers WHERE id=?")->execute([$id]);
    }

    public function getAllApproved(): \Generator
    {
        return $this->db->query("SELECT * FROM job_offers  WHERE approved = 'true' ORDER BY posted_on DESC ")->execute()->fetch();
    }
}