<?php
namespace Data\Items;


class ItemDTO
{
    private $title;

    private $company;

    private $salary;

    private $description;

    private $postedOn;

    private $approved;

    /**
     * ItemDTO constructor.
     * @param $title
     * @param $company
     * @param $salary
     * @param $description
     * @param $postedOn
     */
    public function __construct($title, $company, $salary, $description, $postedOn, $approved)
    {
        $this->title = $title;
        $this->company = $company;
        $this->salary = $salary;
        $this->description = $description;
        $this->postedOn = $postedOn;
        $this->approved = $approved;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPostedOn()
    {
        return $this->postedOn;
    }

    /**
     * @param mixed $postedOn
     */
    public function setPostedOn($postedOn): void
    {
        $this->postedOn = $postedOn;
    }

    /**
     * @return mixed
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param mixed $approved
     */
    public function setApproved($approved): void
    {
        $this->approved = $approved;
    }

}