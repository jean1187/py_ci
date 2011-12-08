<?php



/**
 * Historialsessions
 *
 * @Table(name="historialSessions")
 * @Entity
 */
class Historialsessions
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
     * @var datetime $fechaingreso
     *
     * @Column(name="fechaIngreso", type="datetime", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var text $userdata
     *
     * @Column(name="userData", type="text", nullable=false)
     */
    private $userdata;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="users_id", referencedColumnName="id")
     * })
     */
    private $users;

}