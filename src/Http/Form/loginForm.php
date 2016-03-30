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

    private $pass;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'email',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'gui-input','placeholder'=>'Input email'],
                'label' => false,
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'password',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class'=>'gui-input','placeholder'=>'Input Password'],
                'label' => false,
                'label_attr' => ['class'=>'field-label']
            ]
        )->add(
            'login',
            'submit',
            [

            ]
        );
    }

    public function getName()
    {
        return 'login';
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
}