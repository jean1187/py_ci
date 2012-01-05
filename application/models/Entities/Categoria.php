<?php



/**
 * Categoria
 *
 * @Table(name="categoria")
 * @Entity
 */
class Categoria
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var AreaInversion
     *
     * @ManyToOne(targetEntity="AreaInversion")
     * @JoinColumns({
     *   @JoinColumn(name="areaInversion_id", referencedColumnName="id")
     * })
     */
    private $areainversion;

}