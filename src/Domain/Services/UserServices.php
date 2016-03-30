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
                $user->setAkses('superadmin');
                break;
            case 1:
                $user->setAkses('admin');
                break;
            case 2:
                $user->setAkses('lapak');
                break;
        }
    }

}