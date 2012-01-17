<?php
class M_proyectos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="proyectos";
    }
    
    function resultTable($table)
    {
       return $this->db->get_where($table,array("delete"=>0))->result_array(); 
    }//consultas_para los combos
    
}//fin class
?>