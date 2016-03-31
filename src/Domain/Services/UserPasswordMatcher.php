<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 16:32
 */

namespace Hackathon\pasar\Domain\Services;

use Hackathon\pasar\Domain\Entity\User;

/**
 * Class UserPasswordMatcher
 * @package Hackathon\pasar\Domain\Services
 */
class UserPasswordMatcher
{
    private $rawPassword;

    private $user;

    public function __Construct($rawPassword,User $user)
    {
        $this->rawPassword = md5($rawPassword);
        $this->user = $user;
    }

    public function match()
    {
        return $this->rawPassword == $this->user->getPassword();
    }


}