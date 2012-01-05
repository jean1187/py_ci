<?php



/**
 * Status
 *
 * @Table(name="status")
 * @Entity
 */
class Status
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
     * @Column(name="nombre", type="string", length=60, nullable=false)
     */
    private $nombre;

    /**
     * @var CategoriaStatus
     *
     * @ManyToOne(targetEntity="CategoriaStatus")
     * @JoinColumns({
     *   @JoinColumn(name="categoriaStatus_id", referencedColumnName="id")
     * })
     */
    private $categoriastatus;

}