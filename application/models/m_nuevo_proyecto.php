<?php
class M_nuevo_proyecto extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="proyectos";
    }
    
    function resultTable($table)
    {
       return $this->db->get($table)->result_array(); 
    }//consultas_para los combos
    
    function resultTable_Where($table,$where)
    {
       return $this->db->get_where($table,$where)->result_array(); 
    }//consultas_para los combos

}//fin class
?>