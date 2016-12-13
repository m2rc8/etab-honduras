<?php

namespace MINSAL\IndicadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MINSAL\IndicadoresBundle\Validator as CustomAssert;

/**
 * MINSAL\IndicadoresBundle\Entity\Matriz
 *
 * @ORM\Table(name="matriz")
 * @ORM\Entity
 */
class Matriz
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion;

  
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
     * Set descripcion
     *
     * @param  string               $descripcion
     * @return Matriz
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
 

    public function __toString()
    {
         return ' -- '.$this->descripcion;
    }

 
    /**
     * Set id
     *
     * @param  integer              $id
     * @return Matriz
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->indicadores = new \Doctrine\Common\Collections\ArrayCollection();
    } 
}