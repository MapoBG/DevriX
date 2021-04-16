<?php
namespace Database;

class DatabaseStatement implements DatabaseStatementInterface
{
    private $pdoStatement;

    /**
     * DatabaseStatement constructor.
     * @param $pdoStatement
     */
    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }


    public function execute(array $params = []): DatabaseStatementInterface
    {
        $this->pdoStatement->execute($params);
        return $this;
    }

    public function fetch(): \Generator
    {
       $row = $this->pdoStatement->fetch(\PDO::FETCH_ASSOC);
       while ($row !== false) {
           yield $row;
           $row = $this->pdoStatement->fetch(\PDO::FETCH_ASSOC);
       }
    }
}