<?php



/**
 * Categoriastatus
 *
 * @Table(name="categoriaStatus")
 * @Entity
 */
class Categoriastatus
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

}