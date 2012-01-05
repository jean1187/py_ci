<?php



/**
 * Menu
 *
 * @Table(name="menu")
 * @Entity
 */
class Menu
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
     * @var string $url
     *
     * @Column(name="url", type="string", length=50, nullable=true)
     */
    private $url;

    /**
     * @var text $grupo
     *
     * @Column(name="grupo", type="text", nullable=true)
     */
    private $grupo;

    /**
     * @var Menu
     *
     * @ManyToOne(targetEntity="Menu")
     * @JoinColumns({
     *   @JoinColumn(name="parent", referencedColumnName="id")
     * })
     */
    private $parent;

}