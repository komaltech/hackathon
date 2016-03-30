<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 30/03/16
 * Time: 14:23
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity\Merk;

interface MerkRepositoryInterface
{

    /**
     * @param $id
     * @return Merk
     */
    public function findById($id);
}