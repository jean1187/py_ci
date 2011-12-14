<?php
class M_menu extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="menu";
    }
    
    function add()
    {
        $datos=array("nombre"=>$this->input->post("nombre"),"url"=>$this->input->post("url"),"grupo"=>  ",".implode(",",$this->input->post("grupo")).",");
        if($this->input->post("parent"))
                $datos["parent"]=$this->input->post("parent");
        
        $this->db->insert($this->table, $datos);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin add
    function Grupos()
    {
        return $this->db->get("grupo")->result_array();
    }
    
}//fin class
?>