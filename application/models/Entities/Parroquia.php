<?php



/**
 * Parroquia
 *
 * @Table(name="parroquia")
 * @Entity
 */
class Parroquia
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
     * @var Municipio
     *
     * @ManyToOne(targetEntity="Municipio")
     * @JoinColumns({
     *   @JoinColumn(name="municipio_id", referencedColumnName="id")
     * })
     */
    private $municipio;

}