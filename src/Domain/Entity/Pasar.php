<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 13:51
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class Pasar
 * @package Hackathon\pasar\Domain\Entity
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrinePasarRepository")
 * @Table(name="pasar")
 * @HasLifecycleCallbacks
 */
class Pasar {

    /**
     * @Column(type="integer")
     * @Generatevalue
     * @var int
     * @Id
     */

    private $id;

    /**
     * @Column(type="integer",name="kode_pasar",nullable=false)
     * @var int
     */
    private $kodePasar;

    /**
     *@Column(type="string",name="nama_pasar",length=255,nullable=false)
     * @var string
     */
    private $namaPasar;

    /**
     *@Column(type="string",length=255,name="latitude_a",nullable=false)
     * @var string
     */
    private $latitudeA;

    /**
     * @Column(type="string",length=255,name="latitude_b",nullable=false)
     * @var string
     */
    private $latitudeB;

    /**
     * @Column(type="string",length=255,name="longitude_a",nullable=false)
     * @var string
     */
    private $longitudeA;

    /**
     *@Column(type="string",length=255,name="longitude_b",nullable=false)
     * @var string
     */
    private $longitudeB;

    /**
     *@Column(type="datetime",name="created_at",nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     *@Column(type="datetime",name="updated_at",nullable=false)
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

    public function getKodePasar()
    {
        return $this->kodePasar;
    }

    public function setKodePasar($kodePasar)
    {
        $this->kodePasar = $kodePasar;
    }

    /**
     * @return string
     */
    public function getNamaPasar()
    {
        return $this->namaPasar;
    }

    /**
     * @param $namaPasar
     */
    public function setNamaPasar($namaPasar)
    {
        $this->namaPasar = $namaPasar;
    }

    /**
     * @return string
     */
    public function getLatitudeA()
    {
        return $this->latitudeA;
    }

    /**
     * @param $latitudeA
     */
    public function setLatitudeA($latitudeA)
    {
        $this->latitudeA = $latitudeA;
    }

    /**
     * @return string
     */
    public function getLatitudeB()
    {
        return $this->latitudeB;
    }

    /**
     * @param $latitudeB
     */
    public function setLatitudeB($latitudeB)
    {
        $this->latitudeB = $latitudeB;
    }

    /**
     * @return string
     */
    public function getLongitudeA()
    {
        return $this->longitudeA;
    }

    /**
     * @param $longitudeA
     */
    public function setLongitudeA($longitudeA)
    {
        $this->longitudeA = $longitudeA;
    }

    /**
     * @return string
     */
    public function getLongitudeB()
    {
        return $this->longitudeB;
    }

    /**
     * @param $longitudeB
     */

    public function setLongitudeB($longitudeB)
    {
        $this->longitudeB = $longitudeB;
    }

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
     * @return Void
     */
    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @prePersist
     * @return Void
     */

    public function timestampableUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }



}