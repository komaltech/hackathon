<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 14:58
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity\User;


interface UserRepositoryInterface
{
    /**
     * @param $id
     * @return User
     */
    public function findById($id);

    /**
     * @param $email
     * @return User
     */

    public function findByEmail($email);

    /**
     * @param $lapakId
     * @return User
     */

    public function findByLapakId($lapakId);

}