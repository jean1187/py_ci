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
        $this->db->insert($this->table,$datos);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin add
    
    function editar()
    {
        $datos=array("nombre"=>$this->input->post("nombre"),"url"=>$this->input->post("url"),"grupo"=>  ",".implode(",",$this->input->post("grupo")).",");
        if($this->input->post("parent"))
                $datos["parent"]=$this->input->post("parent");
        $this->db->where('id', $this->input->post("id"));
        $this->db->update($this->table, $datos);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin editar
    
    function delete()
    {
        $hijos=$this->db->get_where($this->table,array('parent' => $this->input->post("id"),"delete"=>0))->num_rows();
        if($hijos)
        {
            $plural=($hijos>1)?"s":"";
            echo "Este item tiene ".$hijos." hijo".$plural." y no puede ser borrado";
        }
        else
        {
            //echo $this->db->delete($this->table, array('id' => $this->input->post("id"))); 
            $this->db->where('id', $this->input->post("id"));
            $this->db->update($this->table, array("delete"=>true));
            /// * No modificar esta linea
            $this->bitacora->crear();
        }
    }
    function Grupos()
    {
        return $this->db->get("grupo")->result_array();
    }
    
}//fin class
?>