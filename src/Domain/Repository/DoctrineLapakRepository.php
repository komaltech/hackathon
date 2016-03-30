<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 14:08
 */

namespace Hackathon\pasar\Domain\Repository;
use Doctrine\ORM\EntityRepository;
use Hackathon\pasar\Domain\Contracts\Repository\LapakRepositoryInterface;

/**
 * Class DoctrineLapakRepository
 * @package Hackathon\pasar\Domain\Repository
 */
class DoctrineLapakRepository extends EntityRepository implements LapakRepositoryInterface
{
    public function findById($id)
    {
        return $this->find($id);
    }

    public function findByNamaLapak($namaLapak)
    {
        return $this->findOneBy(['nama_lapak' => $namaLapak]);
    }

    public function findByPasarId($pasarId)
    {
        return $this->findOneBy(['pasar_id' => $pasarId]);
    }
}