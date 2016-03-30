<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 16:10
 */

namespace Hackathon\pasar\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class loginForm
 * @package Hackathon\pasar\Http\Form
 */

class loginForm extends AbstractType
{
    /**
     * @var string
     */

    private $email;

    /**
     * @var string
     */

    private $password;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'username',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'form-control','placeholder'=>'Input Email or Username', 'required' => 'required'],
                'label' => false,
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'password',
            'password',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'form-control','placeholder'=>'Input Password', 'required' => 'required'],
                'label' => false,
                'label_attr' => ['class'=>'field-label']
            ]
        )->add(
            'login',
            'submit',
            [
                'attr' => ['class' => 'btn btn-primary btn-block btn-flat'],
                'label' => 'Sign In'
            ]
        );
    }

    public function getName()
    {
        return 'login';
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function setUsername($username)
    {
        $this->email = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}