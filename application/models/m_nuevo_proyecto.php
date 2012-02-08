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
    
    function resultTable($table)
    {
       return $this->db->get($table)->result_array(); 
    }//consultas_para los combos
    
    function resultTable_Where($table,$where,$select="*")
    {
        $this->db->select($select);
        return $this->db->get_where($table,$where)->result_array();
       
    }//consultas_para los combos

}//fin class
?>