<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clinica\AppBundle\Controller;

/**
 * Description of DoctorController
 *
 * @author veroh
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Clinica\AppBundle\Resources\config\validation;
use Clinica\AppBundle\Entity\Doctor;
use Clinica\AppBundle\Form\Type\DoctorType;


class DoctorController extends Controller {
    /**
     * 
     * @Template()
     */
    public function newDoctorAction(Request $request){
        $doctor = new Doctor;
        $validator= $this->get('validator');
        $errors= $validator->validate($doctor);
        $form = $this->createForm(new DoctorType(),$doctor);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($doctor);
            $em->flush();
            return $this->redirect($this->generateUrl('mostrar_doctor'));
        }
        return array('form' => $form->createView());
    }
    
    public function listaDoctorAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $doctores=$em->getRepository('ClinicaAppBundle:Doctor')->findAll();
        return $this->render('ClinicaAppBundle:Doctor:listaDoctor.html.twig',array('doctores'=>$doctores));
    }
}
