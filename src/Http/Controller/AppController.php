<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 15:48
 */

namespace Hackathon\pasar\Http\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Hackathon\pasar\Domain\Entity\Lapak;
use Hackathon\pasar\Domain\Entity\Merk;
use Hackathon\pasar\Domain\Entity\Pasar;
use Hackathon\pasar\Domain\Entity\Produk;
use Hackathon\pasar\Domain\Entity\User;
use Hackathon\pasar\Domain\Services\UserPasswordMatcher;
use Hackathon\pasar\Http\Form\loginForm;
use Hackathon\pasar\Http\Form\produkForm;
use Hackathon\pasar\Http\Form\UserForm;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;


class AppController Implements ControllerProviderInterface
{

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */

    /**
     * @var Application
     */

    private $app;

    /**
     * @param Application $app
     * @return ControllerCollection
     */

    public function connect(Application $app)
    {
       $controllers = $app['controllers_factory'];
        
    }
}