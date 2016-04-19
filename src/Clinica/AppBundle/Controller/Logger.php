<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clinica\AppBundle\Controller;

/**
 * Description of Logger
 *
 * @author veroh
 */
class Logger
{
    protected $manejador;
    function __construct()
    {
        $this->manejador = $manejador;
    }
    function error($mensaje)
    {
        $this->manejador->escribir('* [ERROR] '.$mensaje);
    }
    function info($mensaje)
    {
        $this->manejador->escribir('info: '.$mensaje);
    }
    
}