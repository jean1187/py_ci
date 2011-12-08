<?php



/**
 * Tipoproyecto
 *
 * @Table(name="tipoProyecto")
 * @Entity
 */
class Tipoproyecto
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
     * @var Categoria
     *
     * @ManyToOne(targetEntity="Categoria")
     * @JoinColumns({
     *   @JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

}