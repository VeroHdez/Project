<?php

namespace Clinica\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadClienteData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
       $c=new \Clinica\AppBundle\Entity\Cliente();
       $c->setNombre("Juan");
       $c->setApellidos("Sanchez");
       $c->setTelefono("8266155161");
       
      

        $manager->persist($c);
        $manager->flush();
    }
}

