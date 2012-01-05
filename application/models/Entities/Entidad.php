<?php



/**
 * Entidad
 *
 * @Table(name="entidad")
 * @Entity
 */
class Entidad
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
     * @var Organo
     *
     * @ManyToOne(targetEntity="Organo")
     * @JoinColumns({
     *   @JoinColumn(name="organo_id", referencedColumnName="id")
     * })
     */
    private $organo;

}