<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 14:09
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class Merk
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrineMerkRepository")
 * @Table(name="merk")
 * @HasLifecycleCallbacks
 */
class Merk
{

    /**
     * @Column(type="integer")
     * @var int
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", name="nama_merk", nullable=false)
     * @var string
     */
    private $namaMerk;



    /**
     * @Column(type="datetime", name="created_at", nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime", name="updated_at", nullable=false)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNamaMerk()
    {
        return $this->namaMerk;
    }

    /**
     * @param $namaMerk
     */
    public function setNamaMerk($namaMerk)
    {
        $this->namaMerk = $namaMerk;
    }

    /**
     * @return string
     */


    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @PrePersist
     * @return void
     */
    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @PrePersist
     * @return void
     */
    public function timestampableUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }

}