<?php
/**
 * Created by PhpStorm.
 * User: zhengdalu
 * Date: 15-7-29
 * Time: 下午9:27
 */

class Room {
    protected $id;
    protected $name;
    protected $description;
    protected $updatedAt;
    protected $createdAt;
    protected $numOfPlayers;
    protected $numOfCardSets;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getNumOfPlayers()
    {
        return $this->numOfPlayers;
    }

    /**
     * @param mixed $numOfPlayers
     */
    public function setNumOfPlayers($numOfPlayers)
    {
        $this->numOfPlayers = $numOfPlayers;
    }

    /**
     * @return mixed
     */
    public function getNumOfCardSets()
    {
        return $this->numOfCardSets;
    }

    /**
     * @param mixed $numOfCardSets
     */
    public function setNumOfCardSets($numOfCardSets)
    {
        $this->numOfCardSets = $numOfCardSets;
    }

    public function prePersist()
    {
        $this->setCreatedAt(new \DateTime());
        $this->preUpdate();
    }

    public function preUpdate()
    {
        $this->setUpdatedAt(new \DateTime());
    }
    /**
     * @var integer
     */

}
