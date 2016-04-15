<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clinica\AppBundle\Controller;

/**
 * Description of Archivo
 *
 * @author veroh
 */
class Archivo
{
    private $archivo;
    function __construct()
    {
    $this->archivo = fopen(__DIR__.'/debug.log', 'a');
    }
    function escribir($contenido)
    {
        fwrite($this->archivo, $contenido);
    }
    // ...
}