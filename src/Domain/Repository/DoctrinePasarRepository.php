<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 31/03/16
 * Time: 7:43
 */

namespace Hackathon\pasar\Domain\Repository;


use Doctrine\ORM\EntityRepository;
use Hackathon\pasar\Domain\Contracts\Repository\PasarRepositoryInterface;
use Hackathon\pasar\Domain\Entity\Pasar;

class DoctrinePasarRepository extends EntityRepository implements PasarRepositoryInterface
{

    /**
     * @param $id
     * @return Pasar
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param $namaPasar
     * @return Pasar[]
     */
    public function findByNamaPasar($namaPasar)
    {
        return $this->findBy(['namaPasar' => $namaPasar]);
    }
}