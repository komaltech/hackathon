<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:04
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity\Produk;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ProdukRepositoryInterface
 * @package Hackathon\pasar\Domain\Contracts\Repository
 */
interface ProdukRepositoryInterface
{
    /**
     * @param $id
     * @return Produk
     */

    public function findById($id);

    /**
     * @param $namaProduk
     * @return ArrayCollection
     */

    public function findByNamaProduk($namaProduk);

    /**
     * @param $merkId
     * @return ArrayCollection
     */

    public function findByMerkId($merkId);

    /**
     * @param $kodeLapak
     * @return Produk
     */
    public function findByKodeLapak($kodeLapak);
}