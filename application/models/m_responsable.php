<?php
class M_responsable extends CI_Model {

    private $table;   
    private $data;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="responsable";
        
        //carga de los datos que se reciben por el metodo post, y seran insertados en la BD        
        $this->data=array("nombre"=>$this->input->post("nombre"),"apellido"=>$this->input->post("apellido"),"organo_id"=>$this->input->post("organos"),"cargos_id"=>$this->input->post("cargos"));
            if($this->input->post("email"))
                $this->data["email"]=$this->input->post("email");
            if($this->input->post("tlf_celular"))
                $this->data["tlf_celular"]=$this->input->post("tlf_celular");
            if($this->input->post("fax"))
                $this->data["fax"]=$this->input->post("fax");
                $this->data["entidad_id"]=($this->input->post("entidades"))?$this->input->post("entidades"):NULL;
    }
    
    function add()
    {
        //carga de los datos que se reciben por el metodo post, y seran insertados en la BD        
        $this->db->insert($this->table,$this->data);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin add    
    
    function editar()
    {
        //carga de los datos que se reciben por el metodo post, y seran insertados en la BD        
    
            
        $this->db->where('id', $this->input->post("id"));
        $this->db->update($this->table,$this->data);
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin editar    
    
    function delete()
    {
        $cantidad=$this->db->get_where("proyecto",array('responsableProyecto_id' => $this->input->post("id"),"delete"=>0))->num_rows();
        if($cantidad)
        {
            $plural=($cantidad>1)?"s":"";
            echo "Esta \"Persona\" tiene ".$cantidad." proyecto".$plural." asignados, por eso puede ser borrado";
        }
        else
        {
            //echo $this->db->delete($this->table, array('id' => $this->input->post("id"))); 
            $this->db->where('id',$this->input->post("id"));
            $this->db->update($this->table, array("delete"=>true));
            /// * No modificar esta linea
            $this->bitacora->crear();
        }
    }//fin delete 
        

    function organos()
    {
        return $this->db->get_where("organo",array("delete"=>0))->result_array();
    }//fin organos

    function cargos()
    {
        return $this->db->get_where("cargos",array("delete"=>0))->result_array();
    }//fin organos
    
    function entidades($id_organo)
    {
        return $this->db->get_where("entidad",array("delete"=>0,"organo_id"=>$id_organo))->result_array();
    }//fin organos
    
    function valid_email_modif() 
    {
        return $this->db->get_where($this->table,array("email"=>$this->input->post("email"),"id <>"=>$this->input->post("id"),"delete"=>0))->row_array();
    }
}//fin class
?>