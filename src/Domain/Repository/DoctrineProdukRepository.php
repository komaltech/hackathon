<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:17
 */

namespace Hackathon\pasar\Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Hackathon\pasar\Domain\Contracts\Repository\ProdukRepositoryInterface;
use Hackathon\pasar\Domain\Entity\Produk;

/**
 * Class DoctrineProdukRepository
 * @package Hackathon\pasar\Domain\Repository
 */
class DoctrineProdukRepository extends EntityRepository implements ProdukRepositoryInterface

{

    /**
     * @param $id
     * @return Produk
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param $namaProduk
     * @return Produk[]
     */
    public function findByNamaProduk($namaProduk)
    {
        return $this->findOneBy(['nama_produk'=>$namaProduk]);
    }

    /**
     * @param $merkId
     * @return Produk[]
     */
    public function findByMerkId($merkId)
    {
        return $this->findOneBy(['merk_id'=>$merkId]);
    }

    /**
     * @param $kodeLapak
     * @return Produk
     */
    public function findByKodeLapak($kodeLapak)
    {
        return $this->findBy(["kodeLapak" => $kodeLapak]);
    }
}