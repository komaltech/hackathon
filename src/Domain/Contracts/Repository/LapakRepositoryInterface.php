<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 14:22
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity\Lapak;

interface LapakRepositoryInterface
{

    /**
     * @param $id
     * @return Lapak
     */
    public function findById($id);

    /**
     * @param $namaLapak
     * @return Lapak
     */
    public function findByNamaLapak($namaLapak);

    /**
     * @param $pasarId
     * @return Lapak
     */
    public function findByPasarId($pasarId);
}