<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 31/03/16
 * Time: 9:08
 */

namespace Hackathon\pasar\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class lapakForm extends AbstractType
{

    private $kodeLapak;

    private $namaLapak;

    private $deskripsi;

    private $pasarId;

    private $createdAt;

    private $updatedAt;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'kodeLapak',
            'text',[
                'constraints' => new Assert\NotBlank()
            ]
        )->add(
            'namaLapak',
            'text',[
                'constraints' => new Assert\NotBlank()
            ]
        )->add(
            'deskripsi',
            'text',[

            ]
        )->add(
            'pasarId',
            'text',[
                'constraints' => new Assert\NotBlank()
            ]
        )->add(
            'kirim',
            'submit',
            [
                'attr' => ['class' => 'btn btn-primary']
            ]
        );
    }

    public function getName()
    {
        return 'lapak_form';
    }

    public function getKodeLapak()
    {
        return $this->kodeLapak;
    }

    public function setKodeLapak($kodeLapak)
    {
        $this->kodeLapak = $kodeLapak;
    }

    public function getNamaLapak()
    {
        return $this->namaLapak;
    }

    public function setNamaLapak($namaLapak)
    {
        $this->namaLapak = $namaLapak;
    }

    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    public function getPasarId()
    {
        return $this->pasarId;
    }

    public function setPasarId($pasarId)
    {
        $this->pasarId = $pasarId;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}