<?php
 
// src/Clinica/AppBundle/Controller/ClienteController.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Clinica\AppBundle\Controller;
 
/*
 * @author veroh
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Clinica\AppBundle\Resources\config;
use Clinica\AppBundle\Entity\Cliente;
use Clinica\AppBundle\Form\Type\ClienteType;

class ClienteController extends Controller {
    /**
     * 
     * @Template()
     */
    public function newClienteAction(Request $request){
        $cliente = new Cliente;
        $validator= $this->get('validator');
        $errors=$validator->validate($cliente);
        $form = $this->createForm(new ClienteType,$cliente);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();
            return $this->redirect($this->generateUrl('mostrar_cliente'));
        }
        return array('form' => $form->createView());
    }
    
    public function listaClientesAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $clientes=$em->getRepository('ClinicaAppBundle:Cliente')->findAll();
        return $this->render('ClinicaAppBundle:Cliente:listaClientes.html.twig',array('clientes'=>$clientes));
    }
}
