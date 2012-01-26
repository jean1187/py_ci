<?php
class M_fixtures extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    
    function cargar_datos_basicos_logueo()
    {
        $result="";
        $this->db->truncate('bitacora');
         $result.=$this->db->last_query()."\n";
        
        $this->db->truncate('historialSessions');
         $result.=$this->db->last_query()."\n";        
         
        $this->db->truncate('users');
         $result.=$this->db->last_query()."\n";
         
        $this->db->truncate('status');
         $result.=$this->db->last_query()."\n";
         
        $this->db->truncate('categoriaStatus');
         $result.=$this->db->last_query()."\n";
        
         $this->db->truncate('grupo');
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('menu');
         $result.=$this->db->last_query()."\n";
         
         
         
        $this->db->insert('categoriaStatus', array("nombre"=>"user"));
         $result.=$this->db->last_query()."\n";
         
         
         
         $status=array(
                    array("nombre"=>"activo","categoriaStatus_id"=>1),
                    array("nombre"=>"inactivo","categoriaStatus_id"=>1),
            );
         
         $this->db->insert_batch('status', $status);
          $result.=$this->db->last_query()."\n";
          
        $grupos=array(
                    array("nombre"=>"super_admin"),
                    array("nombre"=>"proyecto")
            );
         
         $this->db->insert_batch('grupo', $grupos);
          $result.=$this->db->last_query()."\n";

        $menues=array(
                    array("nombre"=>"Mantenimiento","url"=>"#","parent"=>NULL,"grupo"=>",1,"),
                    array("nombre"=>"Menu","url"=>"menu","parent"=>1,"grupo"=>",1,"),
                    array("nombre"=>"Tablas Sistema","url"=>"#","parent"=>1,"grupo"=>",1,"),
                    array("nombre"=>"Organos","url"=>"organos","parent"=>3,"grupo"=>",1,"),
                    array("nombre"=>"Cargos","url"=>"cargos","parent"=>3,"grupo"=>",1,"),
                    array("nombre"=>"Representantes","url"=>"representantes","parent"=>3,"grupo"=>",1,"),
            
                    array("nombre"=>"Proyectos","url"=>"proyectos","parent"=>NULL,"grupo"=>",2,"),
                    array("nombre"=>"Nuevo","url"=>"nuevo_proyecto","parent"=>7,"grupo"=>",2,"),
                    array("nombre"=>"Modificar","url"=>"modificar_proyecto","parent"=>7,"grupo"=>",2,"),
            
            );
         
         $this->db->insert_batch('menu', $menues);
          $result.=$this->db->last_query()."\n";
          
         
            $users=array(
                        array("userLogin"=>"admin","passwordLogin"=>"VqN3dmdcRki+6mClS6aKJTs+Pus4t9nANXtKAuLJzDyAmyuNshQ5hHhOOGgC+MnqFZog+5XkE5k5IRs/4HyfnA==","nombre"=>"Jean C","apellido"=>"Mendoza","correo"=>"jeanmendozar@gmail.com","organo_id"=>1,"grupo_id"=>1,"status_id"=>1),
                        array("userLogin"=>"py","passwordLogin"=>"VqN3dmdcRki+6mClS6aKJTs+Pus4t9nANXtKAuLJzDyAmyuNshQ5hHhOOGgC+MnqFZog+5XkE5k5IRs/4HyfnA==","nombre"=>"Proyectos","apellido"=>"Prueba","correo"=>"dgparagua@gmail.com","organo_id"=>1,"grupo_id"=>2,"status_id"=>1),
            ); 
          $this->db->insert_batch('users', $users);
           $result.=$this->db->last_query()."\n";
          
          
        return $result;
    }
    
}//fin class
?>