<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 17:01
 */

namespace Hackathon\pasar\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class produkForm
 * @package Hackathon\pasar\Http\Form
 */

class produkForm extends AbstractType
{
    private $kode;

    private $namaProduk;

    private $satuan;

    private $harga;

    private $qty;

    private $deskripsi;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'kode',
            'integer',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'gui-input','placeholder'=>'Kode'],
                'label'=>false
            ]
        )->add(
            'namaProduk',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'gui-input','placeholder'=>'Nama Produk'],
                'label' => false
            ]
        )->add(
            'satuan',
            'integer',
            [
                'constraints'=> new Assert\NotBlank(),
                'attr' => ['class'=>'gui-input','placeholder'=>'Satuan'],
                'label' => false
            ]

        )->add(
            'qty',
            'integer',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'gui-input','placeholder'=>'Jumlah'],
                'label'=>false
            ]
        )->add(
            'harga',
            'integer',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'gui-input','placeholder'=>'Harga'],
                'label' => false
            ]

        )->add(
            'deskripsi',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'gui-input','placeholder'=>'deskripsi'],
                'label' => false
            ]
        )->add(
            'kirim',
            'submit',
            [
                'attr' => []
            ]
        );

    }

    public function getName()
    {
        return 'produk_form';
    }

    public function getKode()
    {
        return $this->kode;
    }

    public function setKode($kode)
    {
        $this->kode = $kode;
    }

    public function getNamaProduk()
    {
        return $this->namaProduk;
    }

    public function setNamaProduk($namaProduk)
    {
        $this->namaProduk = $namaProduk;
    }

    public function getSatuan()
    {
        return $this->satuan;
    }

    public function setSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

}