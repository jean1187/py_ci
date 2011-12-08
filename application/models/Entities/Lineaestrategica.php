<?php



/**
 * Lineaestrategica
 *
 * @Table(name="lineaEstrategica")
 * @Entity
 */
class Lineaestrategica
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
     * @Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

}