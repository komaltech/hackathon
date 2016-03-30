<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 16:37
 */

namespace Hackathon\pasar\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UserForm
 * @package Hackathon\pasar\Http\Form
 */

class UserForm extends AbstractType
{

    private $email;

    private $pass;

    private $akses;

    private $createdAt;

    private $updatedAt;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'email',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'form-control','placeholder'=>'Username'],
                'label' => false
            ]
        )->add(
            'password',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'form-control','placeholder'=>'Password'],
                'label' => false
            ]

        )->add(
            'akses',
            'choice',
            [
                'constraints' => new Assert\Choice(array(0,1,2)),
                'choice_list' => array(0 =>'superadmin',1=>'admin',2=>'lapak'),
                'placeholder' => '-- Pilih Status --',
                'label' => false,
                'empty_data'=>null,
                'attr' => [
                    'class' => 'select'
                ]
            ]
        )->add(
            'kirim',
            'submit',
            [
                'label' => 'eksekusi',
                'attr' => [

                ]
            ]

        );
    }

    public function getName()
    {
        return 'user_form';
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getAkses()
    {
        return $this->akses;
    }

    public function setAkses($akses)
    {
        $this->akses = $akses;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}