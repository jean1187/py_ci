<?php



/**
 * Politica
 *
 * @Table(name="politica")
 * @Entity
 */
class Politica
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
     * @var Directriz
     *
     * @ManyToOne(targetEntity="Directriz")
     * @JoinColumns({
     *   @JoinColumn(name="directriz_id", referencedColumnName="id")
     * })
     */
    private $directriz;

}