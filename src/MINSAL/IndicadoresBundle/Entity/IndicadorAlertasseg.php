<?php

namespace MINSAL\IndicadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MINSAL\IndicadoresBundle\Entity\IndicadorAlertasseg
 *
 * @ORM\Table(name="Indicador_alertasseg")
 * @ORM\Entity
 */
class IndicadorAlertasseg
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
     * @var decimal $limiteInferior
     *
     * @ORM\Column(name="limite_inferior", type="float", nullable=false)
     */
    private $limiteInferior;

    /**
     * @var decimal $limiteSuperior
     *
     * @ORM\Column(name="limite_superior", type="float",  nullable=false)
     */
    private $limiteSuperior;

    /**
     * @var $color
     *
     * @ORM\ManyToOne(targetEntity="Alerta")
     * @ORM\JoinColumn(name="id_color_alerta", referencedColumnName="id", nullable=false)
     *
     */
    private $color;

    /**
     * @var $indicador
     *
     * @ORM\ManyToOne(targetEntity="ClasificacionTecnicai", inversedBy="alertas", cascade={"persist"})
     * @ORM\JoinColumn(name="id_indicador", referencedColumnName="id", nullable=false)
     *
     */
    private $indicador;

    /**
     * @var string $comentario
     *
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;

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
     * Set limiteInferior
     *
     * @param  float            $limiteInferior
     * @return IndicadorAlertasseg
     */
    public function setLimiteInferior($limiteInferior)
    {
        $this->limiteInferior = $limiteInferior;

        return $this;
    }

    /**
     * Get limiteInferior
     *
     * @return float
     */
    public function getLimiteInferior()
    {
        return $this->limiteInferior;
    }

    /**
     * Set limiteSuperior
     *
     * @param  float            $limiteSuperior
     * @return IndicadorAlertasseg
     */
    public function setLimiteSuperior($limiteSuperior)
    {
        $this->limiteSuperior = $limiteSuperior;

        return $this;
    }

    /**
     * Get limiteSuperior
     *
     * @return float
     */
    public function getLimiteSuperior()
    {
        return $this->limiteSuperior;
    }

    /**
     * Set color
     *
     * @param  MINSAL\IndicadoresBundle\Entity\Alerta $color
     * @return IndicadorAlertasseg
     */
    public function setColor(\MINSAL\IndicadoresBundle\Entity\Alerta $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return MINSAL\IndicadoresBundle\Entity\Alerta
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set indicador
     *
     * @param  MINSAL\IndicadoresBundle\Entity\ClasificacionTecnicai $indicador
     * @return IndicadorAlertasseg
     */
    public function setIndicador(\MINSAL\IndicadoresBundle\Entity\ClasificacionTecnicai $indicador)
    {
        $this->indicador = $indicador;

        return $this;
    }

    /**
     * Get indicador
     *
     * @return MINSAL\IndicadoresBundle\Entity\ClasificacionTecnicai
     */
    public function getIndicador()
    {
        return $this->indicador;
    }

    /**
     * Set comentario
     *
     * @param  string           $comentario
     * @return IndicadorAlertasseg
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    public function __toString()
    {
        return $this->limiteInferior.' - '.$this->limiteSuperior.' '.$this->color.' '.$this->comentario;
    }
}