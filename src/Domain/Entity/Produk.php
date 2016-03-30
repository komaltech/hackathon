<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 13:30
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class Produk
 * @package Hackathon\pasar\Domain\Entity
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrineProdukRepository")
 * @HasLifecycleCallbacks
 */
class Produk {

    /**
     * @id
     * @Column(type="integer")
     * @GenerateValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="integer")
     * @var int
     */
    private $kode;

    /**
     * @Column(type="string",length="255", name="nama_produk",nullable=false)
     * @var string
     */

    private $namaProduk;

    /**
     * @Column(type="integer",name="merk_id")
     * @var int
     */

    private $merkId;

    /**
     * @Column(type="integer")
     * @var int
     */

    private $satuan;

    /**
     * @Column(type="integer")
     * @var int
     */

    private $harga;

    /**
     * @Column(type="integer")
     * @var int
     */

    private $qty;

    /**
     * @Column(type="text")
     * @var text
     */

    private $deskripsi;

    /**
     * @Column(type="datetime",name="created_at", nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime",name="updated_at",nullable=false)
     * @var \DateTime
     */

    private $updateAt;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKode()
    {
        return $this->kode;
    }

    public function setKode($kode)
    {
        $this->kode = $kode;
    }

    public function getNamaProduk()
    {
        return $this->namaProduk;
    }

    public function setNamaProduk($namaProduk)
    {
        $this->namaProduk = $namaProduk;
    }

    public function getMerkId()
    {
        return $this->merkId;
    }

    public function setMerkId($merkId)
    {
        $this->merkId = $merkId;
    }

    public function getSatuan()
    {
        return $this->satuan;
    }

    public function SetSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    public function timestampableUpdateEvent()
    {
        $this->updateAt = new \DateTime();
    }

    }