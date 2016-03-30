<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:10
 */

namespace Hackathon\pasar\Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Hackathon\pasar\Domain\Contracts\Repository\UserRepositoryInterface;


/**
 * Class DoctrineUserRepository
 * @package Hackathon\pasar\Domain\Repository
 */
class DoctrineUserRepository extends EntityRepository implements UserRepositoryInterface
{
    public function findById($id)
    {
        return $this->find($id);
    }

    public function findByEmail($email)
    {
       return $this->findOneBy(['email' => $email]);
    }

    public function findByUsername($username)
    {
        return $this->findOneBy(['username' => $username]);
    }

    public function findByLapakId($lapakId)
    {
        return $this->findOneBy(['lapak_id' => $lapakId]);
    }
}