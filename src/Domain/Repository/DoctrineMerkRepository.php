<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 14:21
 */

namespace Hackathon\pasar\Domain\Repository;

use Hackathon\pasar\Domain\Contracts\Repository\MerkRepositoryInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class DoctrineMerkRepository
 * @package Hackathon\pasar\Domain\Repository
 */
class DoctrineMerkRepository extends EntityRepository implements MerkRepositoryInterface
{

    /**
     * @param $id
     * @return null|object
     */
    public function findById($id)
    {
        return $this->find($id);
    }
}