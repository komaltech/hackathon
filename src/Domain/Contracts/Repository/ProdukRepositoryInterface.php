<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:04
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity\Produk;


interface ProdukRepositoryInterface
{
    /**
     * @param $id
     * @return Produk
     */

    public function findById($id);

    /**
     * @param $namaProduk
     * @return Produk
     */

    public function findByNamaProduk($namaProduk);

    /**
     * @param $merkId
     * @return Produk
     */

    public function findByMerkId($merkId);
}