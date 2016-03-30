<?php

namespace Clinica\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClinicaAppBundle:Default:index.html.twig');
    }
}
