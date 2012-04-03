<?php
class M_plan_inversion extends CI_Model {
/*
 * ALTER TABLE `proyectos`.`planinversion` DROP INDEX `cod` ,
ADD INDEX `cod` ( `cod` ) 
 */
    private $table;
    //datos de cada registro
    private $datos=array();
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="planinversion";
        //seteo de datos que vienen por post
        $this->datos["organo"]=$this->input->post("organo_ente");
        $this->datos["justif"]=$this->input->post("justif");
        $this->datos["necesi"]=$this->input->post("necesi");
        $this->datos["potencia"]=$this->input->post("potencia");
        $this->datos["directriz"]=$this->input->post("directriz");
        $this->datos["objetivo"]=$this->input->post("objetivo");
        $this->datos["estrategia"]=$this->input->post("estrategia");
        $this->datos["planestad"]=$this->input->post("planestad");
        $this->datos["fechaest"]=$this->input->post("fechaest");
        $this->datos["inverest"]=$this->input->post("lineaEstrategica");
        /*$this->datos["planmuni"]=$this->input->post("planmuni");
        $this->datos["fechamuni"]=$this->input->post("fechamuni");
        $this->datos["invermuni"]=$this->input->post("invermuni");*/
        $this->datos["formula"]=$this->input->post("formula");
        $this->datos["integraci"]=$this->input->post("integraci");
        $this->datos["valorporc"]=$this->input->post("valorporc");
        $this->datos["observa"]=$this->input->post("observa");        
    }
    
   function add($cod)
   {
       $this->datos["cod"]=$cod;
       date_default_timezone_set('America/Caracas');       
       $this->datos["fecha"]=date('d-m-Y  h:i:s a');
       //Se inserta el registro en la base de datos
       $this->db->insert($this->table,$this->datos);
        /// * No modificar esta linea ya que se encarga de llevar el control en la bitacora de registro
       $this->bitacora->crear();
   }//fin add
   
   function modif()
   {
       $this->db->where(array("id"=>$this->input->post("id_plan")));
       $this->db->update($this->table,$this->datos);
       /// * No modificar esta linea ya que se encarga de llevar el control en la bitacora de registro
       $this->bitacora->crear();
   }
   
   function searchPyDeEsteYear($cod)
   {
       $this->db->from($this->table);
       $this->db->like('fecha', date("Y"));
       $this->db->where('cod', $cod); 
       return $this->db->get()->row_array();
   }
   function listaDePlanDeInversion($cod)
   {
       return $this->db->get_where($this->table,array("cod"=>$cod))->result_array();
   }
}//fin class
?>