<?php



/**
 * Users
 *
 * @Table(name="users")
 * @Entity
 */
class Users
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
     * @var string $userlogin
     *
     * @Column(name="userLogin", type="string", length=45, nullable=false)
     */
    private $userlogin;

    /**
     * @var string $passwordlogin
     *
     * @Column(name="passwordLogin", type="string", length=250, nullable=false)
     */
    private $passwordlogin;

    /**
     * @var string $nombre
     *
     * @Column(name="nombre", type="string", length=60, nullable=false)
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @Column(name="apellido", type="string", length=60, nullable=false)
     */
    private $apellido;

    /**
     * @var string $correo
     *
     * @Column(name="correo", type="string", length=80, nullable=false)
     */
    private $correo;

    /**
     * @var datetime $lastlogin
     *
     * @Column(name="lastLogin", type="datetime", nullable=true)
     */
    private $lastlogin;

    /**
     * @var Entidad
     *
     * @ManyToOne(targetEntity="Entidad")
     * @JoinColumns({
     *   @JoinColumn(name="entidad_id", referencedColumnName="id")
     * })
     */
    private $entidad;

    /**
     * @var Grupo
     *
     * @ManyToOne(targetEntity="Grupo")
     * @JoinColumns({
     *   @JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var Organo
     *
     * @ManyToOne(targetEntity="Organo")
     * @JoinColumns({
     *   @JoinColumn(name="organo_id", referencedColumnName="id")
     * })
     */
    private $organo;

    /**
     * @var Status
     *
     * @ManyToOne(targetEntity="Status")
     * @JoinColumns({
     *   @JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

}