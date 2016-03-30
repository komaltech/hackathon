<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 13:37
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class Lapak
 * @package Hackathon\pasar\Domain\Entity
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrineLapakRepository")
 * @Table(name="lapak")
 * @HasLifecycleCallbacks
 */
class Lapak
{
    /**
     * @id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="integer",name="kode_lapak", nullable=false)
     * @var int
     */
    private $kodeLapak;

    /**
     * @Column(type="string", name="nama_lapak", nullable=false)
     * @var string
     */
    private $namaLapak;

    /**
     * @Column(type="string", nullable=false)
     * @var string
     */
    private $deskripsi;

    /**
     * @Column(type="integer",name="pasar_id", nullable=false)
     * @var int
     */
    private $pasarId;

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
     * @return int
     */
    public function getKodeLapak()
    {
        return $this->kodeLapak;
    }

    /**
     * @param $kodeLapak
     */
    public function setKodeLapak($kodeLapak)
    {
        $this->kodeLapak = $kodeLapak;
    }

    /**
     * @return string
     */
    public function getNamaLapak()
    {
        return $this->namaLapak;
    }

    /**
     * @param $namaLapak
     */
    public function setNamaLapak($namaLapak)
    {
        $this->namaLapak = $namaLapak;
    }

    /**
     * @return string
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * @param $deskripsi
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    /**
     * @return int
     */
    public function getPasarId()
    {
        return $this->pasarId;
    }

    /**
     * @param $pasarId
     */
    public function setPasarId($pasarId)
    {
        $this->pasarId = $pasarId;
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