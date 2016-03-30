<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 13:01
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class User
 * @package Hackathon\pasar\Domain\Entity
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrineUserRepository")
 * @HasLifecycleCallbacks
 */
class User{

    /**
     * @id
     * @Column(type="integer")
     * @GenerateValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string",length="255",nullable=false)
     * @var string
     */
    private $email;

    /**
     * @Column(type="string",length="255",nullable=false)
     * @var string
     */
    private $telp;

    /**
     * @Column(type="string",length="255",nullable=false)
     * @var string
     */
    private $pass;

    /**
     * @Column(type="string",length="255",name="nama_lengkap",nullable=false)
     * @var string
     */
    private $namaLengkap;

    /**
     * @Column(type="string",length="255",nullable=false)
     * @var string
     */
    private $alamat;

    /**
     * @Column(type="integer")
     * @var int
     */
    private $akses;

    /**
     * @Column(type="integer",name="lapak_id")
     * @var int
     */
    private $lapakId;

    /**
     * @Column(type="text")
     * @var text
     */
    private $deskripsi;

    /**
     * @Column(type="datetime" , name="create_at" , nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime",name="updated_at",nullable=false)
     * @var \DateTime
     */
    private $updateAt;


    /**
     * @return int
     */
    public function getId()
    {
       return $this->id;
    }

    /**'
     * @param $id
     */

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        return $this->email = $email;
    }

    /**
     * @return string
     */

    public function getTelp()
    {
        return $this->telp;
    }

    /**
     * @param $telp
     */

    public function setTelp($telp)
    {
        $this->telp = $telp;
    }

    /**
     * @return string
     */

    public function getPas()
    {
        return $this->pass;
    }

    /**
     * @param $pass
     */

    public function setPass($pass)
    {
        $this->pass = password_hash($pass,PASSWORD_DEFAULT);
    }

    /**
     * @param $pass
     */

    public function setPassNonHash($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return string
     */

    public function getNamaLengkap()
    {
        return $this->namaLengkap;
    }

    /**
     * @param $namaLengkap
     */

    public function setNamaLengkap($namaLengkap)
    {
        $this->namaLengkap = $namaLengkap;
    }

    /**
     * @return string
     */

    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * @param $alamat
     */

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    /**
     * @return int
     */

    public function getAkses()
    {
        return $this->akses;
    }

    /**
     * @param $akses
     */

    public function setAkses($akses)
    {
        $this->akses = $akses;
    }

    /**
     * @return int
     */

    public function getLapakId()
    {
        return $this->lapakId;
    }

    /**
     * @param $lapakId
     */

    public function setLapakId($lapakId)
    {
        $this->lapakId = $lapakId;
    }

    /**
     * @return text
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
     * @PrePersist
     * @return Void
     */

    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @PrePersist
     * @return Void
     */

    public function timestampableUpdateEvent()
    {
        $this->updateAt = new \DateTime();
    }



}