<?php

namespace Clinica\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Clinica\AppBundle\Entity\Usuarios;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClinicaAppBundle:Default:index.html.twig');
    }
    
    public function loginAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('ClinicaAppBundle:Usuarios');
        
        $session->clear();
        $username = $request->get('username');
        $password = sha1($request->get('password'));
        $user = $repository->findOneBy(array('usuario' => $username, 'pass' => $password));
        if ($user) {
            return $this->render('ClinicaAppBundle:Default:index.html.twig', array('name' => $user->getUsuario()));
        } else {
            return $this->render('ClinicaAppBundle:Usuario:login.html.twig', array('name' => 'Login Error'));
        }
           
    }
    
    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $user1 = $request->get('username');
            $password = $request->get('password');

            $user= new Usuarios();
            $user->setUsuario($user1);
            $user->setPass(sha1($password));
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('ClinicaAppBundle:Usuario:newUsuario.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('ClinicaAppBundle:Usuario:login.html.twig');
    }
}
