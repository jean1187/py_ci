<?php



/**
 * Proyecto
 *
 * @Table(name="proyecto")
 * @Entity
 */
class Proyecto
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
     * @var boolean $aprobado
     *
     * @Column(name="aprobado", type="boolean", nullable=true)
     */
    private $aprobado;

    /**
     * @var datetime $fechaAprobado
     *
     * @Column(name="fecha_aprobado", type="datetime", nullable=false)
     */
    private $fechaAprobado;

    /**
     * @var integer $cod
     *
     * @Column(name="cod", type="integer", nullable=true)
     */
    private $cod;

    /**
     * @var string $nombre
     *
     * @Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var text $descripcion
     *
     * @Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string $organoentidadrespId
     *
     * @Column(name="organoEntidadResp_id", type="string", length=20, nullable=false)
     */
    private $organoentidadrespId;

    /**
     * @var string $organoentidadejecutorId
     *
     * @Column(name="organoEntidadEjecutor_id", type="string", length=20, nullable=false)
     */
    private $organoentidadejecutorId;

    /**
     * @var boolean $etapapreinversion
     *
     * @Column(name="etapaPreinversion", type="boolean", nullable=false)
     */
    private $etapapreinversion;

    /**
     * @var boolean $etapaproyectonuevo
     *
     * @Column(name="etapaProyectoNuevo", type="boolean", nullable=false)
     */
    private $etapaproyectonuevo;

    /**
     * @var boolean $etapaamplmodif
     *
     * @Column(name="etapaAmplModif", type="boolean", nullable=false)
     */
    private $etapaamplmodif;

    /**
     * @var boolean $etapaculminacion
     *
     * @Column(name="etapaCulminacion", type="boolean", nullable=false)
     */
    private $etapaculminacion;

    /**
     * @var integer $fase
     *
     * @Column(name="fase", type="integer", nullable=false)
     */
    private $fase;

    /**
     * @var string $comunidadconccomunal
     *
     * @Column(name="comunidadConcComunal", type="string", length=250, nullable=true)
     */
    private $comunidadconccomunal;

    /**
     * @var string $norte
     *
     * @Column(name="norte", type="string", length=19, nullable=true)
     */
    private $norte;

    /**
     * @var string $este
     *
     * @Column(name="este", type="string", length=19, nullable=true)
     */
    private $este;

    /**
     * @var text $politica
     *
     * @Column(name="politica", type="text", nullable=true)
     */
    private $politica;

    /**
     * @var integer $tiempoestimado
     *
     * @Column(name="tiempoEstimado", type="integer", nullable=false)
     */
    private $tiempoestimado;

    /**
     * @var decimal $monto
     *
     * @Column(name="monto", type="decimal", nullable=false)
     */
    private $monto;

    /**
     * @var datetime $fechacreacion
     *
     * @Column(name="fechaCreacion", type="datetime", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var text $impactosocial
     *
     * @Column(name="impactoSocial", type="text", nullable=false)
     */
    private $impactosocial;

    /**
     * @var integer $poblacionbenef
     *
     * @Column(name="poblacionBenef", type="integer", nullable=false)
     */
    private $poblacionbenef;

    /**
     * @var integer $porcentajeavancef
     *
     * @Column(name="porcentajeAvanceF", type="integer", nullable=false)
     */
    private $porcentajeavancef;

    /**
     * @var integer $porcentajeavancefinan
     *
     * @Column(name="porcentajeAvanceFinan", type="integer", nullable=false)
     */
    private $porcentajeavancefinan;

    /**
     * @var integer $empleodirectos
     *
     * @Column(name="empleoDirectos", type="integer", nullable=true)
     */
    private $empleodirectos;

    /**
     * @var integer $empleosindirectos
     *
     * @Column(name="empleosIndirectos", type="integer", nullable=true)
     */
    private $empleosindirectos;

    /**
     * @var string $formulacion
     *
     * @Column(name="formulacion", type="string", length=250, nullable=true)
     */
    private $formulacion;

    /**
     * @var string $metas
     *
     * @Column(name="metas", type="string", length=20, nullable=true)
     */
    private $metas;

    /**
     * @var string $articulacion
     *
     * @Column(name="articulacion", type="string", length=250, nullable=true)
     */
    private $articulacion;

    /**
     * @var string $componente
     *
     * @Column(name="componente", type="string", length=250, nullable=true)
     */
    private $componente;

    /**
     * @var string $observaciones
     *
     * @Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer $factible
     *
     * @Column(name="factible", type="integer", nullable=true)
     */
    private $factible;

    /**
     * @var decimal $situadoconst
     *
     * @Column(name="situadoConst", type="decimal", nullable=true)
     */
    private $situadoconst;

    /**
     * @var decimal $fondocompinterr
     *
     * @Column(name="fondoCompInterr", type="decimal", nullable=true)
     */
    private $fondocompinterr;

    /**
     * @var decimal $otrafuente
     *
     * @Column(name="otraFuente", type="decimal", nullable=true)
     */
    private $otrafuente;

    /**
     * @var text $notaof
     *
     * @Column(name="notaOF", type="text", nullable=true)
     */
    private $notaof;

    /**
     * @var text $explique2
     *
     * @Column(name="explique2", type="text", nullable=true)
     */
    private $explique2;

    /**
     * @var text $descripcion2
     *
     * @Column(name="descripcion2", type="text", nullable=true)
     */
    private $descripcion2;

    /**
     * @var text $objetivogene
     *
     * @Column(name="objetivogene", type="text", nullable=true)
     */
    private $objetivogene;

    /**
     * @var text $objetivoespe
     *
     * @Column(name="objetivoespe", type="text", nullable=true)
     */
    private $objetivoespe;

    /**
     * @var text $poblacionbe
     *
     * @Column(name="poblacionbe", type="text", nullable=true)
     */
    private $poblacionbe;

    /**
     * @var text $difilcultad
     *
     * @Column(name="difilcultad", type="text", nullable=true)
     */
    private $difilcultad;

    /**
     * @var text $explique4
     *
     * @Column(name="explique4", type="text", nullable=true)
     */
    private $explique4;

    /**
     * @var text $fuerza
     *
     * @Column(name="fuerza", type="text", nullable=true)
     */
    private $fuerza;

    /**
     * @var text $adquimateria
     *
     * @Column(name="adquiMateria", type="text", nullable=true)
     */
    private $adquimateria;

    /**
     * @var text $adquiinsumo
     *
     * @Column(name="adquiInsumo", type="text", nullable=true)
     */
    private $adquiinsumo;

    /**
     * @var text $transftecnologia
     *
     * @Column(name="transfTecnologia", type="text", nullable=true)
     */
    private $transftecnologia;

    /**
     * @var text $armonizacion
     *
     * @Column(name="armonizacion", type="text", nullable=true)
     */
    private $armonizacion;

    /**
     * @var text $eficienciarecursos
     *
     * @Column(name="eficienciaRecursos", type="text", nullable=true)
     */
    private $eficienciarecursos;

    /**
     * @var text $redistribucionsocial
     *
     * @Column(name="redistribucionSocial", type="text", nullable=true)
     */
    private $redistribucionsocial;

    /**
     * @var text $plansimon
     *
     * @Column(name="planSimon", type="text", nullable=true)
     */
    private $plansimon;

    /**
     * @var text $plancomunal
     *
     * @Column(name="planComunal", type="text", nullable=true)
     */
    private $plancomunal;

    /**
     * @var text $planmunicipal
     *
     * @Column(name="planMunicipal", type="text", nullable=true)
     */
    private $planmunicipal;

    /**
     * @var text $planestadal
     *
     * @Column(name="planEstadal", type="text", nullable=true)
     */
    private $planestadal;

    /**
     * @var text $integracion
     *
     * @Column(name="integracion", type="text", nullable=true)
     */
    private $integracion;

    /**
     * @var boolean $ubica71
     *
     * @Column(name="ubica71", type="boolean", nullable=true)
     */
    private $ubica71;

    /**
     * @var text $explique7
     *
     * @Column(name="explique7", type="text", nullable=true)
     */
    private $explique7;

    /**
     * @var boolean $poblacion72
     *
     * @Column(name="poblacion72", type="boolean", nullable=true)
     */
    private $poblacion72;

    /**
     * @var text $explique72
     *
     * @Column(name="explique72", type="text", nullable=true)
     */
    private $explique72;

    /**
     * @var integer $indigena73
     *
     * @Column(name="indigena73", type="integer", nullable=true)
     */
    private $indigena73;

    /**
     * @var text $explique73
     *
     * @Column(name="explique73", type="text", nullable=true)
     */
    private $explique73;

    /**
     * @var boolean $servicios74
     *
     * @Column(name="servicios74", type="boolean", nullable=true)
     */
    private $servicios74;

    /**
     * @var text $explique74
     *
     * @Column(name="explique74", type="text", nullable=true)
     */
    private $explique74;

    /**
     * @var text $integar75
     *
     * @Column(name="integar75", type="text", nullable=true)
     */
    private $integar75;

    /**
     * @var boolean $productiva81
     *
     * @Column(name="productiva81", type="boolean", nullable=true)
     */
    private $productiva81;

    /**
     * @var text $explique8
     *
     * @Column(name="explique8", type="text", nullable=true)
     */
    private $explique8;

    /**
     * @var text $impulso82
     *
     * @Column(name="impulso82", type="text", nullable=true)
     */
    private $impulso82;

    /**
     * @var text $impulso83
     *
     * @Column(name="impulso83", type="text", nullable=true)
     */
    private $impulso83;

    /**
     * @var text $participacionlaboral91
     *
     * @Column(name="participacionLaboral91", type="text", nullable=true)
     */
    private $participacionlaboral91;

    /**
     * @var text $participaciondirecc92
     *
     * @Column(name="participacionDirecc92", type="text", nullable=true)
     */
    private $participaciondirecc92;

    /**
     * @var text $transferencia101
     *
     * @Column(name="transferencia101", type="text", nullable=true)
     */
    private $transferencia101;

    /**
     * @var boolean $validaconsejo
     *
     * @Column(name="validaConsejo", type="boolean", nullable=true)
     */
    private $validaconsejo;

    /**
     * @var text $explique10
     *
     * @Column(name="explique10", type="text", nullable=true)
     */
    private $explique10;

    /**
     * @var text $consolidacion103
     *
     * @Column(name="consolidacion103", type="text", nullable=true)
     */
    private $consolidacion103;

    /**
     * @var boolean $infraestructura
     *
     * @Column(name="infraestructura", type="boolean", nullable=true)
     */
    private $infraestructura;

    /**
     * @var text $explique111
     *
     * @Column(name="explique111", type="text", nullable=true)
     */
    private $explique111;

    /**
     * @var boolean $productiva112
     *
     * @Column(name="productiva112", type="boolean", nullable=true)
     */
    private $productiva112;

    /**
     * @var text $explique112
     *
     * @Column(name="explique112", type="text", nullable=true)
     */
    private $explique112;

    /**
     * @var text $presupuesto121
     *
     * @Column(name="presupuesto121", type="text", nullable=true)
     */
    private $presupuesto121;

    /**
     * @var text $descripcion122
     *
     * @Column(name="descripcion122", type="text", nullable=true)
     */
    private $descripcion122;

    /**
     * @var text $cronograma
     *
     * @Column(name="cronograma", type="text", nullable=true)
     */
    private $cronograma;

    /**
     * @var text $memoria122
     *
     * @Column(name="memoria122", type="text", nullable=true)
     */
    private $memoria122;

    /**
     * @var text $perspectiva122
     *
     * @Column(name="perspectiva122", type="text", nullable=true)
     */
    private $perspectiva122;

    /**
     * @var text $calculos122
     *
     * @Column(name="calculos122", type="text", nullable=true)
     */
    private $calculos122;

    /**
     * @var text $fotografias122
     *
     * @Column(name="fotografias122", type="text", nullable=true)
     */
    private $fotografias122;

    /**
     * @var text $plano122
     *
     * @Column(name="plano122", type="text", nullable=true)
     */
    private $plano122;

    /**
     * @var text $croquis122
     *
     * @Column(name="croquis122", type="text", nullable=true)
     */
    private $croquis122;

    /**
     * @var text $titularidad127
     *
     * @Column(name="titularidad127", type="text", nullable=true)
     */
    private $titularidad127;

    /**
     * @var text $cronograma128
     *
     * @Column(name="cronograma128", type="text", nullable=true)
     */
    private $cronograma128;

    /**
     * @var text $permisos129
     *
     * @Column(name="permisos129", type="text", nullable=true)
     */
    private $permisos129;

    /**
     * @var decimal $doceavo1
     *
     * @Column(name="doceavo1", type="decimal", nullable=true)
     */
    private $doceavo1;

    /**
     * @var decimal $doceavo2
     *
     * @Column(name="doceavo2", type="decimal", nullable=true)
     */
    private $doceavo2;

    /**
     * @var decimal $doceavo3
     *
     * @Column(name="doceavo3", type="decimal", nullable=true)
     */
    private $doceavo3;

    /**
     * @var decimal $doceavo4
     *
     * @Column(name="doceavo4", type="decimal", nullable=true)
     */
    private $doceavo4;

    /**
     * @var decimal $doceavo5
     *
     * @Column(name="doceavo5", type="decimal", nullable=true)
     */
    private $doceavo5;

    /**
     * @var decimal $doceavo6
     *
     * @Column(name="doceavo6", type="decimal", nullable=true)
     */
    private $doceavo6;

    /**
     * @var decimal $doceavo7
     *
     * @Column(name="doceavo7", type="decimal", nullable=true)
     */
    private $doceavo7;

    /**
     * @var decimal $doceavo8
     *
     * @Column(name="doceavo8", type="decimal", nullable=true)
     */
    private $doceavo8;

    /**
     * @var decimal $doceavo9
     *
     * @Column(name="doceavo9", type="decimal", nullable=true)
     */
    private $doceavo9;

    /**
     * @var decimal $doceavo10
     *
     * @Column(name="doceavo10", type="decimal", nullable=true)
     */
    private $doceavo10;

    /**
     * @var decimal $doceavo11
     *
     * @Column(name="doceavo11", type="decimal", nullable=true)
     */
    private $doceavo11;

    /**
     * @var decimal $doceavo12
     *
     * @Column(name="doceavo12", type="decimal", nullable=true)
     */
    private $doceavo12;

    /**
     * @var string $porcentajeejecucion
     *
     * @Column(name="porcentajeEjecucion", type="string", length=200, nullable=true)
     */
    private $porcentajeejecucion;

    /**
     * @var Organo
     *
     * @ManyToOne(targetEntity="Organo")
     * @JoinColumns({
     *   @JoinColumn(name="organoCreador_id", referencedColumnName="id")
     * })
     */
    private $organocreador;

    /**
     * @var Entidad
     *
     * @ManyToOne(targetEntity="Entidad")
     * @JoinColumns({
     *   @JoinColumn(name="entidadCreador_id", referencedColumnName="id")
     * })
     */
    private $entidadcreador;

    /**
     * @var LineaEstrategica
     *
     * @ManyToOne(targetEntity="LineaEstrategica")
     * @JoinColumns({
     *   @JoinColumn(name="lineaEstrategica_id", referencedColumnName="id")
     * })
     */
    private $lineaestrategica;

    /**
     * @var ObjetivosDelMilenio
     *
     * @ManyToOne(targetEntity="ObjetivosDelMilenio")
     * @JoinColumns({
     *   @JoinColumn(name="objetivosDelMilenio_id", referencedColumnName="id")
     * })
     */
    private $objetivosdelmilenio;

    /**
     * @var TipoProyecto
     *
     * @ManyToOne(targetEntity="TipoProyecto")
     * @JoinColumns({
     *   @JoinColumn(name="tipoProyecto_id", referencedColumnName="id")
     * })
     */
    private $tipoproyecto;

    /**
     * @var Responsable
     *
     * @ManyToOne(targetEntity="Responsable")
     * @JoinColumns({
     *   @JoinColumn(name="responsableProyecto_id", referencedColumnName="id")
     * })
     */
    private $responsableproyecto;

    /**
     * @var Parroquia
     *
     * @ManyToOne(targetEntity="Parroquia")
     * @JoinColumns({
     *   @JoinColumn(name="parroquia_id", referencedColumnName="id")
     * })
     */
    private $parroquia;

    /**
     * @var EstrategiaObjetivo
     *
     * @ManyToOne(targetEntity="EstrategiaObjetivo")
     * @JoinColumns({
     *   @JoinColumn(name="estrategia_objetivo_id", referencedColumnName="id")
     * })
     */
    private $estrategiaObjetivo;

}