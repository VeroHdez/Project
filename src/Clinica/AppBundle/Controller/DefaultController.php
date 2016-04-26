<?php

namespace Clinica\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClinicaAppBundle:Default:index.html.twig');
    }
    
    public function loginAction(Request $request)
    {
      /*  if($request->getMethod()=="POST"){
            $usuario = $request->get("user");
            $pass = $request->get("pass");
            $consulta1 = $this ->getDoctrine() ->getRepository('AppBundle:Usuarios')->findOneBy(array("usuario"=>$usuario,"pass"=>$pass));
           
            if($consulta1){
            }else{
                $this->get('session')->getFlashBag()->add('mensaje','Los datos ingresados son incorrectos');
                return $this->redirect($this->generateUrl('usuario_login'));
            }
           }*/
        $session = $request->getSession();
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error=$request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }  else {
            $error=$session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('ClinicaAppBundle:Usuario:login.html.twig', array('error' => $error));
        
        //return $this->render('ClinicaAppBundle:Usuario:login.html.twig',array('error'=>$error));
        
    }
}
