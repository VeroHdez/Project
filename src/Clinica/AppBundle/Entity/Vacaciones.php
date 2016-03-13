<?php

namespace Clinica\AppBundle\Entity;

/**
 * Vacaciones
 */
class Vacaciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecInicio;

    /**
     * @var \DateTime
     */
    private $fecFinal;


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
     * Set fecInicio
     *
     * @param \DateTime $fecInicio
     *
     * @return Vacaciones
     */
    public function setFecInicio($fecInicio)
    {
        $this->fecInicio = $fecInicio;

        return $this;
    }

    /**
     * Get fecInicio
     *
     * @return \DateTime
     */
    public function getFecInicio()
    {
        return $this->fecInicio;
    }

    /**
     * Set fecFinal
     *
     * @param \DateTime $fecFinal
     *
     * @return Vacaciones
     */
    public function setFecFinal($fecFinal)
    {
        $this->fecFinal = $fecFinal;

        return $this;
    }

    /**
     * Get fecFinal
     *
     * @return \DateTime
     */
    public function getFecFinal()
    {
        return $this->fecFinal;
    }
}

