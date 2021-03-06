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
use Hackathon\pasar\Http\Form\tambahProdukForm;
use Hackathon\pasar\Http\Form\produkForm;
use Hackathon\pasar\Http\Form\UserForm;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;


class AppController Implements ControllerProviderInterface
{

    /**
     * @var Application
     */

    private $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Application $app
     * @return ControllerCollection
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/createRawUser', [$this, 'rawUserAction'])
            ->bind('createRawUser');

        $controllers->get('/home', [$this, 'homeAction'])
            ->before([$this, 'checkUserSession'])
            ->bind('homeIndex');

        $controllers->get('/logout', [$this, 'logoutAction'])
            ->bind('logout');

        $controllers->match('/loginAdmin', [$this, 'loginAdminAction'])
            ->before([$this, 'checkUserSession'])
            ->bind('loginAdmin');

        $controllers->get('/listLapak', [$this, 'showLapakAction'])
            ->bind('showLapak');

        $controllers->get('/listMerk', [$this, 'showMerkAction'])
            ->bind('listMerk');

        $controllers->get('/detailProduk', [$this, 'detailProdukAction'])
            ->bind('detailProduk');

        $controllers->get('/listPasar', [$this, 'listPasarAction'])
            ->bind('listPasar');

        $controllers->get('/listUser', [$this, 'listUserAction'])
            ->bind('listUser');

        $controllers->get('/listProdukPelapak', [$this, 'listProdukPelapakAction'])
            ->before([$this,'checkStatusPelapak'])
            ->bind('listProdukPelapak');

        $controllers->match('/UserProdukInput', [$this, 'UserProdukInputAction'])
            ->before([$this, 'checkStatusPelapak'])
            ->bind('UserProdukInput');

        return $controllers;

    }

    public function UserProdukInputAction(Request $request)
    {
        $produkForm = new tambahProdukForm();

        $formBuilder = $this->app['form.factory']->create($produkForm, $produkForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('pelapak\UserProdukInput.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('pelapak\UserProdukInput.twig', ['form' => $formBuilder->createView()]);
        }

        $infoData = Produk::create($produkForm->getKode(), $produkForm->getkodeLapak(), $produkForm->getnamaProduk(), $produkForm->getmerkId(), $produkForm->getsatuan(), $produkForm->getHarga(), $produkForm->getQty(), $produkForm->getDeskripsi());

        $this->app['orm.em']->persist($infoData);
        $this->app['orm.em']->flush();

        return $this->app->redirect($this->app['url_generator']->generate('listProdukPelapak'));


    }

    public function listProdukPelapakAction()
    {
        $infoPelapak = $this->app['produk.repository']->findByKodeLapak($this->app['session']->get('lapakId'));

        return $this->app['twig']->render('pelapak\listProdukPelapak.twig', ['infoPelapak' => $infoPelapak]);
    }

    public function checkStatusPelapak()
    {
        $role = $this->app['session']->get('akses');

        if ($role['value'] !== 2) {
            return $this->app->redirect($this->app['url_generator']->generate('showLapak'));
        }
    }

    public function listUserAction()
    {
        $infoUser = $this->app['user.repository']->findAll();

        return $this->app['twig']->render('listUser.twig', ['infoUser' => $infoUser]);
    }

    public function listPasarAction()
    {
        $infoPasar = $this->app['pasar.repository']->findAll();

        return $this->app['twig']->render('listPasar.twig', ['infoPasar' => $infoPasar]);
    }

    public function detailProdukAction()
    {
        $lapakName = $this->app['lapak.repository']->findByKodeLapak($this->app['request']->get('id'));
        $lapakId = $this->app['produk.repository']->findByKodeLapak($this->app['request']->get('id'));

        return $this->app['twig']->render('detailProduk.twig', ['listProduk' => $lapakId, 'lapakName' => $lapakName]);
    }

    public function showMerkAction()
    {
        $listMerk = $this->app['merk.repository']->findAll();

        return $this->app['twig']->render('listMerk.twig', ['listMerk' => $listMerk]);
    }

    public function showLapakAction()
    {
        $listLapak = $this->app['lapak.repository']->findAll();

        return $this->app['twig']->render('listLapak.twig', ['listLapak' => $listLapak]);
    }

    public function checkUserSession(Request $request)
    {
        if ($request->getPathInfo() === '/loginAdmin' && $this->app['session']->has('nama')) {
            return $this->app->redirect($this->app['url_generator']->generate('homeIndex'));
        }

        if (! $this->app['session']->has('nama') && ! ($request->getPathInfo() === '/loginAdmin')) {
            $this->app['session']->getFlashbag()->add(
              'message_error',
                'Anda Harus Login Terlebih Dahulu!'
            );
            return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
        }
    }

    public function logoutAction()
    {
        $this->app['session']->clear();

        return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
    }
    
    public  function rawUserAction()
    {
        $userInfo = User::create('ditolaksono@gmail.com','ditoyp','faster', 'Dito YP','jl. bunga desember',2);
        
        
        //this method replaced with new administrator access
        //just create a new user from register form.
        $this->app['orm.em']->persist($userInfo);
        $this->app['orm.em']->flush();

        return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
    }

    public function homeAction()
    {
        return $this->app['twig']->render('rumah.twig');
    }

    public function loginAdminAction(Request $request)
    {
        $loginForm = new loginForm();

        $formBuilder = $this->app['form.factory']->create($loginForm, $loginForm);

        if ($request->getMethod() === 'GET' ) {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $user = $this->app['user.repository']->findByUsername($loginForm->getUsername());

        if ($user === null) {
            $this->app['session']->getFlashbag()->add(
                'message_error',
                'Username unavailable'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        if (! (new UserPasswordMatcher($loginForm->getPassword(), $user))->match()) {
            $this->app['session']->getFlashbag()->add(
                'message_error',
                'Password Incorrect'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $this->app['session']->set('akses', ['value' => $user->getAkses()]);
        $this->app['session']->set('nama', ['value' => $user->getNamalengkap()]);
        $this->app['session']->set('lapakId', ['value' => $user->getLapakId()]);

        return $this->app->redirect($this->app['url_generator']->generate('homeIndex'));
    }
}