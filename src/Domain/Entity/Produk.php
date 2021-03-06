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
 * @Table(name="produk")
 * @HasLifecycleCallbacks
 */
class Produk {

    /**
     * @Id
     * @Column(name="id", type="integer", nullable=false)
     * @GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @Column(type="integer")
     * @var int
     */
    private $kode;

    /**
     * @Column(type="string",length=255, name="nama_produk",nullable=false)
     * @var string
     */

    private $namaProduk;

    /**
     * @Column(type="integer",name="merk_id")
     * @var int
     */

    private $merkId;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
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
     * @Column(type="string")
     * @var string
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

    /**
     * @Column(type="integer", name="kode_lapak", nullable=false)
     * @var int
     */
    private $kodeLapak;


    public static function create($kode, $kodeLapak, $namaProduk, $merkId, $satuan, $harga, $qty, $deskripsi)
    {
        $informasi = new Produk();

        $informasi->setKode($kode);
        $informasi->setKodeLapak($kodeLapak);
        $informasi->setNamaProduk($namaProduk);
        $informasi->setMerkId($merkId);
        $informasi->setSatuan($satuan);
        $informasi->setHarga($harga);
        $informasi->setQty($qty);
        $informasi->setDeskripsi($deskripsi);
        $informasi->setCreatedAt(new \DateTime());
        $informasi->setUpdateat(new \DateTime());

        return $informasi;
    }

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

    public function getKode()
    {
        return $this->kode;
    }

    /**
     * @param $kode
     */

    public function setKode($kode)
    {
        $this->kode = $kode;
    }

    /**
     * @return string
     */

    public function getNamaProduk()
    {
        return $this->namaProduk;
    }

    /**
     * @param $namaProduk
     */

    public function setNamaProduk($namaProduk)
    {
        $this->namaProduk = $namaProduk;
    }

    /**
     * @return int
     */

    public function getMerkId()
    {
        return $this->merkId;
    }

    /**
     * @param $merkId
     */

    public function setMerkId($merkId)
    {
        $this->merkId = $merkId;
    }

    /**
     * @return int
     */

    public function getSatuan()
    {
        return $this->satuan;
    }

    /**
     * @param $satuan
     */

    public function setSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    /**
     * @return int
     */

    public function getHarga()
    {
        return $this->harga;
    }

    /**
     * @param $harga
     */

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    /**
     * @return int
     */

    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param $qty
     */

    public function setQty($qty)
    {
        $this->qty = $qty;
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
        return $this->updateAt;
    }

    /**
     * @param $updatedAt
     */

    public function setUpdateat($updatedAt)
    {
        $this->updateAt = $updatedAt;
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
     * @PrePersist
     * @return Void
     */

    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @PrePersist
     * @returnVoid
     */

    public function timestampableUpdateEvent()
    {
        $this->updateAt = new \DateTime();
    }

    }