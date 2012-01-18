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
       return $this->db->get_where($table,array("delete"=>0))->result_array(); 
    }//consultas_para los combos
    
    function resultTable_Where($table,$where)
    {
       return $this->db->get_where($table,array_merge(array("delete"=>0),$where))->result_array(); 
    }//consultas_para los combos
    
    function resultParroquias($id_municipio)
    {
        $this->db->select('*');
        $this->db->from('municipio_parroquia');
        $this->db->join('parroquia', 'parroquia.id = municipio_parroquia.parroquia_id');
        $this->db->where(array('municipio_parroquia.municipio_id'=>$id_municipio,"parroquia.delete"=>0)); 
        return $this->db->get()->result_array();
    }//fin resultParroquias
    
}//fin class
?>