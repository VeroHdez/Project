<?php

namespace Clinica\AppBundle\Entity;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $consultorio;

    /**
     * @var \DateTime
     */
    private $horarioEntrada;

    /**
     * @var \DateTime
     */
    private $horarioSalida;
    
    protected $doctor;


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
     * Set consultorio
     *
     * @param string $consultorio
     *
     * @return Horario
     */
    public function setConsultorio($consultorio)
    {
        $this->consultorio = $consultorio;

        return $this;
    }

    /**
     * Get consultorio
     *
     * @return string
     */
    public function getConsultorio()
    {
        return $this->consultorio;
    }

    /**
     * Set horarioEntrada
     *
     * @param \DateTime $horarioEntrada
     *
     * @return Horario
     */
    public function setHorarioEntrada($horarioEntrada)
    {
        $this->horarioEntrada = $horarioEntrada;

        return $this;
    }

    /**
     * Get horarioEntrada
     *
     * @return \DateTime
     */
    public function getHorarioEntrada()
    {
        return $this->horarioEntrada;
    }

    /**
     * Set horarioSalida
     *
     * @param \DateTime $horarioSalida
     *
     * @return Horario
     */
    public function setHorarioSalida($horarioSalida)
    {
        $this->horarioSalida = $horarioSalida;

        return $this;
    }

    /**
     * Get horarioSalida
     *
     * @return \DateTime
     */
    public function getHorarioSalida()
    {
        return $this->horarioSalida;
    }
}

