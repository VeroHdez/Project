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
    protected $archivo;
    function __construct()
    {
        $this->archivo = new Archivo();
    }
    function error($mensaje)
    {
        $this->archivo->escribir('* [ERROR] '.$mensaje);
    }
    function info($mensaje)
    {
        $this->archivo->escribir('info: '.$mensaje);
    }
    // ...
}