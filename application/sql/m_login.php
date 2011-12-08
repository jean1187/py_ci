<?php
class M_login extends CI_Model {

    private $table;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="users";
    }
        /**
	* ValUser
	*
	* Busca en la tabla usuarios si esxiste el registro
	*
	* @access	public
	* @param	string user
	* @param	string password
	* @return	bool ó array
	*/    
    function ValUser($user,$password)
    {

        
        $this->db->select($this->table.'.*,organo.nombre as organo');
        $this->db->from($this->table);
        $this->db->join('organo', 'users.organo_id = organo.id', 'left');
        $this->db->where($this->table.".userLogin",$user);
        $query = $this->db->get();
        $row_user=$query->row_array();
         if(!empty($row_user) && !strcmp($this->encrypt->decode($row_user["passwordLogin"]),$password))
             {
                //Si el Estatus es 2 Esta Inactivo
                 if($row_user["status_id"]==2)
                    return 2;
                $this->db->where(array('userLogin'=> $user,'passwordLogin'=>$password));
                $this->db->update($this->table, array('lastLogin'=>date('Y-m-d H:m:i')));
               return $row_user;
             }
             //si la contrasena esta mala osea el user existe pero la contraseña no cuadra
         else if(!empty($row_user))
         {
             return 1;
         }
         //si por lo menos el usuario esta malo
        else 
             return 0;
    }//fin ValUser
    
        /**
	* HistorialLogin
	*
	* Guarda un registro por cada session del usuario para tener un control de los accesos que ha tenido en el sistema
	*
	* @access	public
	* @return	nada
	*/     
    
    function HistorialLogin()
    {
        $session=$this->session->all_userdata();
        $data = array(
                       'users_id' => $session["userLogin"]["id"],
                       'fechaIngreso' => date('Y-m-d H:m:i'),
                       'userData' => serialize($session)
                    );
        $this->db->insert('historialSessions', $data);
    }//HistorialLogin

}
?>