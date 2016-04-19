<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

namespace Clinica\AppBundle\Form\Type;

/**
 * Description of UsuarioType
 *
 * @author veroh
 */
class UsuarioType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder,array $option){
        $builder
                ->add('usuario', 'text')
                ->add('pass','text')
                ->add('nivel','text')
                ->add('guardar','submit');
    }
    
    public function getName() {
        return 'usuario';
    }
}
