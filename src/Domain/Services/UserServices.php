<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 16:34
 */

namespace Hackathon\pasar\Domain\Services;

use Hackathon\pasar\Domain\Entity\User;

class UserServices
{
    public static function changestatus (User $user)
    {
        $status = $user->getAkses();
        switch($status)
        {
            case 0:
                $user->getAkses(1);
                break;
            case 1:
                $user->getAkses(0);
                break;
        }
    }

}