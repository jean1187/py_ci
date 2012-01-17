<?php
class M_proyectos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="proyectos";
    }
    
    function lineasEstrategicas()
    {
        return $this->db->get_where("lineaEstrategica",array("delete"=>0))->result_array();
    }//fin lineasEstrategicas
    function odm()
    {
        return $this->db->get_where("objetivosDelMilenio",array("delete"=>0))->result_array();
    }//fin objetivos del mileniun
}//fin class
?>