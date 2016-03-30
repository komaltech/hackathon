<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:07
 */

namespace Hackathon\pasar\Domain\Contracts\Repository;

use Hackathon\pasar\Domain\Entity;


interface PasarRepositoryInterface
{
    /**
     * @param $id
     * @return Pasar
     */

    public function findById($id);

    /**
     * @param $namaPasar
     * @return pasar
     */
    public function findByNamaPasar($namaPasar);
}