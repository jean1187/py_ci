<?php



/**
 * Responsable
 *
 * @Table(name="responsable")
 * @Entity
 */
class Responsable
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
     * @var string $apellido
     *
     * @Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string $tlfCelular
     *
     * @Column(name="tlf_celular", type="string", length=45, nullable=true)
     */
    private $tlfCelular;

    /**
     * @var string $fax
     *
     * @Column(name="fax", type="string", length=45, nullable=true)
     */
    private $fax;

    /**
     * @var Cargos
     *
     * @ManyToOne(targetEntity="Cargos")
     * @JoinColumns({
     *   @JoinColumn(name="cargos_id", referencedColumnName="id")
     * })
     */
    private $cargos;

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
     * @var Organo
     *
     * @ManyToOne(targetEntity="Organo")
     * @JoinColumns({
     *   @JoinColumn(name="organo_id", referencedColumnName="id")
     * })
     */
    private $organo;

}