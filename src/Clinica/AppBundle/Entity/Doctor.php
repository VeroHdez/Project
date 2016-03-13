<?php

namespace Clinica\AppBundle\Entity;

/**
 * Doctor
 */
class Doctor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $cedula;

    /**
     * @var string
     */
    private $especialidad;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var float
     */
    private $precioConsulta;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Doctor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Doctor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     *
     * @return Doctor
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Doctor
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Doctor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set precioConsulta
     *
     * @param float $precioConsulta
     *
     * @return Doctor
     */
    public function setPrecioConsulta($precioConsulta)
    {
        $this->precioConsulta = $precioConsulta;

        return $this;
    }

    /**
     * Get precioConsulta
     *
     * @return float
     */
    public function getPrecioConsulta()
    {
        return $this->precioConsulta;
    }
}

