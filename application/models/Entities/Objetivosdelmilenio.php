<?php



/**
 * Objetivosdelmilenio
 *
 * @Table(name="objetivosDelMilenio")
 * @Entity
 */
class Objetivosdelmilenio
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
     * @Column(name="nombre", type="string", length=250, nullable=false)
     */
    private $nombre;

}