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


class DoctrineProdukRepository extends EntityRepository implements ProdukRepositoryInterface

{

    public function findById($id)
    {
        return $this->find($id);
    }

    public function findByNamaProduk($namaProduk)
    {
        return $this->findOneBy(['nama_produk'=>$namaProduk]);
    }

    public function findByMerkId($merkId)
    {
        return $this->findOneBy(['merk_id'=>$merkId]);
    }
}