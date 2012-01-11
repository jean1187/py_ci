<?php
class M_organos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="organo";
    }
    
    function add()
    {
        $this->db->insert($this->table,array("nombre"=>$this->input->post("nombre")));
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin add    
    
    function editar()
    {
        $this->db->where('id', $this->input->post("id"));
        $this->db->update($this->table, array("nombre"=>$this->input->post("nombre")));
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin editar    
    
    function delete()
    {
        $cantidad=$this->db->get_where("responsable",array('organo_id' => $this->input->post("id"),"delete"=>0))->num_rows();
        $cantidad_py=$this->db->get_where("proyecto",array('organoCreador_id' => $this->input->post("id"),"delete"=>0))->num_rows();
        if($cantidad)
        {
            $plural=($cantidad>1)?"s":"";
            echo "Este organo tiene ".$cantidad." registro".$plural." en la tabla \"Responsable\" y no puede ser borrado";
        }
        else if($cantidad_py)
        {
            $plural=($cantidad_py>1)?"s":"";
            echo "Este organo tiene ".$cantidad_py." registro".$plural." en la tabla \"Proyecto\" y no puede ser borrado";
        }        
        else
        {
            //echo $this->db->delete($this->table, array('id' => $this->input->post("id"))); 
            $this->db->where('id', $this->input->post("id"));
            $this->db->update($this->table, array("delete"=>true));
            /// * No modificar esta linea
            $this->bitacora->crear();
        }
    }//fin delete 
    
}//fin class
?>