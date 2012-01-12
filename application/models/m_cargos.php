<?php
class M_cargos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="cargos";
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
        $cantidad=$this->db->get_where("responsable",array('cargos_id' => $this->input->post("id"),"delete"=>0))->num_rows();
        if($cantidad)
        {
            $plural=($cantidad>1)?"s":"";
            echo "Este cargo tiene ".$cantidad." registro".$plural." en la tabla \"Responsable\" y no puede ser borrado";
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