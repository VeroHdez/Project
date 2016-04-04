<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clinica\AppBundle\Form\Type;

/**
 * Description of DoctorType
 *
 * @author veroh
 */


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class DoctorType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre','text')
                ->add('apellidos','text')
                ->add('cedula','text')
                ->add('especialidad','text')
                ->add('telefono','text')
                ->add('precioConsulta','number')
                ->add('guardar','submit');
    }
    
    public function getName() {
        return 'doctor';
    }
}
