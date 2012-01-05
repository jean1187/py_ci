<?php



/**
 * Bitacora
 *
 * @Table(name="bitacora")
 * @Entity
 */
class Bitacora
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
     * @var integer $idregistro
     *
     * @Column(name="idRegistro", type="integer", nullable=false)
     */
    private $idregistro;

    /**
     * @var string $tabla
     *
     * @Column(name="tabla", type="string", length=60, nullable=false)
     */
    private $tabla;

    /**
     * @var boolean $accion
     *
     * @Column(name="accion", type="boolean", nullable=false)
     */
    private $accion;

    /**
     * @var datetime $fecha
     *
     * @Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var text $sql
     *
     * @Column(name="sql", type="text", nullable=false)
     */
    private $sql;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="users_id_responsable", referencedColumnName="id")
     * })
     */
    private $usersResponsable;

}