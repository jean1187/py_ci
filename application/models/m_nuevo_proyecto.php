<?php
class M_nuevo_proyecto extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="resumen";
    }
    
    
    function add()
    {
        
        $datos=array(
                     "nopro"=>$this->input->post("nombre"),
                     "descr"=>$this->input->post("descripcion"),
                     "lineaesta"=>$this->input->post("lineaEstrategica"),
                     "odm"=>$this->input->post("objetivosDelMileniun"),
                     "ti_are"=>$this->input->post("areaInversion"),
                     "ti_cate"=>$this->input->post("categoria"),
                     "ti_pro"=>$this->input->post("tipoProyecto"),
                     "munici"=>$this->input->post("municipio"),
                     "parroq"=>$this->input->post("parroquia"),
                     "directriz"=>$this->input->post("directriz"),
                     "objetivo"=>$this->input->post("objetivo"),
                     "estrategia"=>$this->input->post("estrategia"),
                     "politica"=>$this->input->post("politica"),
                     "etapa1"=>$this->input->post("preinversion"),
                     "etapa2"=>$this->input->post("py_new"),
                     "etapa3"=>$this->input->post("ampl_modif"),
                     "etapa4"=>$this->input->post("cumlinacion"),
                     "fase"=>$this->input->post("fases"),
                     "norespro"=>$this->input->post("nombre_responsable"),
                     "unidad"=>$this->input->post("unidad_abscripcion_resp"),
                     "cargo"=>$this->input->post("cargo_responsable"),
                     "correo"=>$this->input->post("email_resp"),
                     "telf"=>$this->input->post("telefonos_responsable"),
                     "fax"=>$this->input->post("fax_resp"),
                     "cocomu"=>$this->input->post("sector_comunal"),
                     "norte"=>$this->input->post("latitude"),
                     "este"=>$this->input->post("longitude"),
                     "tiempo"=>$this->input->post("tiempoEstimado"),
                     "monto"=>$this->input->post("monto"),
                     "otra"=>$this->input->post("otraFuente"),
                     "impsoc"=>$this->input->post("impsoc"),
                     "pobl"=>$this->input->post("poblacionBeneficiada"),
                     "avafisico"=>$this->input->post("porcentajeAvanceF"),
                     "avafinanc"=>$this->input->post("porcentajeAvanceFinan"),
                     "empdirec"=>$this->input->post("empleosDirectos"),
                     "empindi"=>$this->input->post("empleosIndirectos"),
                     "formulacion"=>$this->input->post("formulacion"),
                     "metas"=>$this->input->post("metas"),
                     "articu"=>$this->input->post("articulacionConOtrosEntes"),
                     "compone"=>$this->input->post("competencias"),
                     "organ"=>$this->input->post("organo"),
                     "ejecu"=>$this->input->post("ente"),
                     );
        $this->db->insert($this->table,$datos);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin add
    
    function edit()
    {
        
        $datos=array(
                     "nopro"=>$this->input->post("nombre"),
                     "descr"=>$this->input->post("descripcion"),
                     "lineaesta"=>$this->input->post("lineaEstrategica"),
                     "odm"=>$this->input->post("objetivosDelMileniun"),
                     "ti_are"=>$this->input->post("areaInversion"),
                     "ti_cate"=>$this->input->post("categoria"),
                     "ti_pro"=>$this->input->post("tipoProyecto"),
                     "munici"=>$this->input->post("municipio"),
                     "parroq"=>$this->input->post("parroquia"),
                     "directriz"=>$this->input->post("directriz"),
                     "objetivo"=>$this->input->post("objetivo"),
                     "estrategia"=>$this->input->post("estrategia"),
                     "politica"=>$this->input->post("politica"),
                     "etapa1"=>$this->input->post("preinversion"),
                     "etapa2"=>$this->input->post("py_new"),
                     "etapa3"=>$this->input->post("ampl_modif"),
                     "etapa4"=>$this->input->post("cumlinacion"),
                     "fase"=>$this->input->post("fases"),
                     "norespro"=>$this->input->post("nombre_responsable"),
                     "unidad"=>$this->input->post("unidad_abscripcion_resp"),
                     "cargo"=>$this->input->post("cargo_responsable"),
                     "correo"=>$this->input->post("email_resp"),
                     "telf"=>$this->input->post("telefonos_responsable"),
                     "fax"=>$this->input->post("fax_resp"),
                     "cocomu"=>$this->input->post("sector_comunal"),
                     "norte"=>$this->input->post("latitude"),
                     "este"=>$this->input->post("longitude"),
                     "tiempo"=>$this->input->post("tiempoEstimado"),
                     "monto"=>$this->input->post("monto"),
                     "otra"=>$this->input->post("otraFuente"),
                     "impsoc"=>$this->input->post("impsoc"),
                     "pobl"=>$this->input->post("poblacionBeneficiada"),
                     "avafisico"=>$this->input->post("porcentajeAvanceF"),
                     "avafinanc"=>$this->input->post("porcentajeAvanceFinan"),
                     "empdirec"=>$this->input->post("empleosDirectos"),
                     "empindi"=>$this->input->post("empleosIndirectos"),
                     "formulacion"=>$this->input->post("formulacion"),
                     "metas"=>$this->input->post("metas"),
                     "articu"=>$this->input->post("articulacionConOtrosEntes"),
                     "compone"=>$this->input->post("competencias"),
                     "organ"=>$this->input->post("organo"),
                     "ejecu"=>$this->input->post("ente"),
                     "explique2"=>$this->input->post("explique2"),
                     "descripcion"=>$this->input->post("descripcion"),
                     "objetivogene"=>$this->input->post("objetivogene"),
                     "objetivoespe"=>$this->input->post("objetivoespe"),
                     "importancia"=>$this->input->post("importancia"),
                     "poblacionbe"=>$this->input->post("poblacionbe"),
                     "difilculta"=>$this->input->post("difilculta"),
                     "explique4"=>$this->input->post("explique4"),
                     "fuerza"=>$this->input->post("fuerza"),
                     "admateria"=>$this->input->post("admateria"),
                     "adinsumo"=>$this->input->post("adinsumo"),
                     "transtecnologia"=>$this->input->post("transtecnologia"),
                     "armonizacion"=>$this->input->post("armonizacion"),
                     "eficiencia"=>$this->input->post("eficiencia"),
                     "redistribu"=>$this->input->post("redistribu"),
                     "plasimon"=>$this->input->post("plasimon"),
                     "plancomunal"=>$this->input->post("plancomunal"),
                     "planmunicipal"=>$this->input->post("planmunicipal"),
                     "planestadal"=>$this->input->post("planestadal"),
                     "integracion"=>$this->input->post("integracion"),
                     "explique7"=>$this->input->post("explique7"),
                     "ubica71"=>$this->input->post("ubica71"),
                     "explique72"=>$this->input->post("explique72"),
                     "poblacion72"=>$this->input->post("poblacion72"),
                     "indigena73"=>$this->input->post("indigena73"),
                     "explique73"=>$this->input->post("explique73"),
                     "servicios74"=>$this->input->post("servicios74"),
                     "explique74"=>$this->input->post("explique74"),
                     "integar75"=>$this->input->post("integar75"),
                     "productiva81"=>$this->input->post("productiva81"),
                     "explique8"=>$this->input->post("explique8"),
                     "impulso82"=>$this->input->post("impulso82"),
                     "parlaboral91"=>$this->input->post("parlaboral91"),
                     "pardireccion92"=>$this->input->post("pardireccion92"),
                     "transferencia101"=>$this->input->post("transferencia101"),
                     "validaconsejo"=>$this->input->post("validaconsejo"),
                     "explique10"=>$this->input->post("explique10"),
                     "consolidacion103"=>$this->input->post("consolidacion103"),
                     "insfraestructura"=>$this->input->post("insfraestructura"),
                     "explique111"=>$this->input->post("explique111"),
                     "explique112"=>$this->input->post("explique112"),
                     "productiva112"=>$this->input->post("productiva112"),
                     "descripcion122"=>$this->input->post("descripcion122"),
                     "insfraestructura"=>$this->input->post("insfraestructura"),
                     "titularidad127"=>$this->input->post("titularidad127"),
                     );
        $this->db->where(array("id"=>$this->input->post("id_py")));
        $this->db->update($this->table,$datos);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin edit
    
    function resultTable($table)
    {
       return $this->db->get($table)->result_array(); 
    }//consultas_para los combos
    
    function resultTable_Where($table,$where,$select="*")
    {
        $this->db->select($select);
        return $this->db->get_where($table,$where)->result_array();
       
    }//consultas_para los combos
		
    function buscando_py_Modif($where)
   {
       $this->db->select("resumen.id as id_py,nopro as nombre,descr as descripcion,lineaesta as lineaEstrategica,
                          odm as objetivosDelMileniun,norespro as nombre_responsable , cocomu as sector_comunal,organ as organo,ejecu as ente,
                          fase as fases,etapa1 as preinversion,etapa2 as py_new,etapa3 as ampl_modif,etapa4 as cumlinacion,ti_are as areaInversion,ti_cate as categoria,
                          unidad as unidad_abscripcion_resp,cargo as cargo_responsable,correo as email_resp,telf as telefonos_responsable,fax as fax_resp,
                          munici as municipio,parroq as parroquia,norte as latitude,este as longitude,directriz,objetivo,estrategia,politica,tiempo as tiempoEstimado,monto,otra as otraFuente,impsoc,pobl as poblacionBeneficiada,
                          avafisico as porcentajeAvanceF,avafinanc as porcentajeAvanceFinan,formulacion,metas,articu as articulacionConOtrosEntes,empdirec as empleosDirectos,empindi as empleosIndirectos,
                          compone as competencias,ti_pro as tipoProyecto,explique2 as cf_ubicacion,municipio.opcion as cf_municipio,parroquia.opcion as cf_parroquia,area.opcion as cf_area,
                          descripcion as cf_descripcion,objetivogene as cf_objetivogene,objetivoespe as cf_objetivoespe,importancia as cf_importancia,poblacionbe as cf_poblacionbe,difilculta as cf_difilculta,explique4 as cf_explique4,fuerza as cf_fuerza,
                          admateria as cf_admateria,adinsumo as cf_adinsumo,transtecnologia cf_transtecnologia,armonizacion as cf_armonizacion,eficiencia as cf_eficiencia,plasimon as cf_plasimon,
                          plancomunal as cf_plancomunal,planmunicipal as cf_planmunicipal,planestadal as cf_planestadal,integracion as cf_integracion,explique7 as cf_explique7,ubica71 as cf_ubica71,explique72 as cf_explique72,poblacion72 as cf_poblacion72,indigena73 as cf_indigena73,
                          explique73 as cf_explique73,servicios74 as cf_servicios74,explique74 as cf_explique74,integar75 as cf_integar75,productiva81 as cf_productiva81,explique8 as cf_explique8,parlaboral91 as cf_parlaboral91,pardireccion92 as cf_pardireccion92,transferencia101 as cf_transferencia101,
                          explique10 as cf_explique10,validaconsejo as cf_validaconsejo,consolidacion103 as cf_consolidacion103,insfraestructura as cf_insfraestructura,explique111 as cf_explique111,productiva112 as cf_productiva112,explique112 as cf_explique112,descripcion122 as cf_descripcion122,
                          presupuesto121 as cf_presupuesto121,cronograma as cf_cronograma,memoria122 as cf_memoria122,perspectiva122 as cf_perspectiva122,calculos122 as cf_calculos122,fotografias122 as cf_fotografias122,plano122 as cf_plano122,croquis122 as cf_croquis122,
                          titularidad127 as cf_titularidad127,cronograma128 as cf_cronograma128,permisos129 as cf_permisos129
                          
                        ");
       $this->db->where($where);
       $this->db->from("resumen");
       $this->db->join('municipio', 'municipio.id = resumen.munici',"left");
       $this->db->join('parroquia', 'parroquia.id = resumen.parroq',"left");
       $this->db->join('area', 'area.id = resumen.directriz',"left");
       
      return  $this->db->get()->row_array();
       //return $this->db->get_where("resumen",$where)->row_array();
   }

   function add_files($campo,$value,$id)
     {
       $this->db->where(array("id"=>$id));
        $this->db->update($this->table,array($campo=>$value));
        /// * No modificar esta linea
        $this->bitacora->crear();
     }//fin add_files
   
}//fin class
?>