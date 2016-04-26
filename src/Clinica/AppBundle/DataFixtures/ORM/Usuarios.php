<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clinica\AppBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of Usuarios
 *
 * @author veroh
 */
class Usuarios extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface{
    private $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;        
    }
    
    public function load(ObjectManager $manager)
    {
        
    }
    

}
