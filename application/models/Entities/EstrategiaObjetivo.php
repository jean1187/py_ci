<?php



/**
 * EstrategiaObjetivo
 *
 * @Table(name="estrategia_objetivo")
 * @Entity
 */
class EstrategiaObjetivo
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer $estrategiaId
     *
     * @Column(name="estrategia_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $estrategiaId;

    /**
     * @var integer $objetivoId
     *
     * @Column(name="objetivo_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $objetivoId;

    /**
     * @var Estrategia
     *
     * @ManyToOne(targetEntity="Estrategia")
     * @JoinColumns({
     *   @JoinColumn(name="estrategia_id", referencedColumnName="id")
     * })
     */
    private $estrategia;

    /**
     * @var Objetivo
     *
     * @ManyToOne(targetEntity="Objetivo")
     * @JoinColumns({
     *   @JoinColumn(name="objetivo_id", referencedColumnName="id")
     * })
     */
    private $objetivo;

}