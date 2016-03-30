<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 21:43
 */

namespace Hackathon\pasar\Domain\Entity;

/**
 * Class User
 * @Entity(repositoryClass="Hackathon\pasar\Domain\Repository\DoctrineUserRepository")
 * @package Hackathon\pasar\Domain\Entity
 * @Table(name="user")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
     */
    private $email;

    /**
     * @Column(type="string", name="username", nullable=false)
     * @var string
     */
    private $username;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
     */
    private $telp;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
     */
    private $password;

    /**
     * @Column(type="string",name="nama_lengkap", length=255, nullable=false)
     * @var string
     */
    private $namaLengkap;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
     */
    private $alamat;

    /**
     * @Column(type="integer", nullable=false)
     * @var int
     */
    private $akses;

    /**
     * @Column(type="integer",name="lapak_id", nullable=true)
     * @var int
     */
    private $lapakId;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $deskripsi;

    /**
     * @Column(type="datetime",name="created_at", nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime",name="updated_at", nullable=false)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param $email
     * @param $password
     * @param $namaLengkap
     * @param $alamat
     * @param $akses
     * @return User
     */
    public static function create($email, $username, $password, $namaLengkap, $alamat, $akses)
    {
        $userInfo = new User();

        $userInfo->setEmail($email);
        $userInfo->setPassword($password);
        $userInfo->setNamaLengkap($namaLengkap);
        $userInfo->createdAt = new \DateTime();
        $userInfo->updatedAt = new \DateTime();
        $userInfo->setTelp('000000000');
        $userInfo->setAlamat($alamat);
        $userInfo->setAkses($akses);
        $userInfo->setUsername($username);

        return $userInfo;
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
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
        $this->email = $email;
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
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
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