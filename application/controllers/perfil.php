<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function index()
	{
		$this->cargar->menu_system("inicio","Configuracion de su cuenta");
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/perfil.php */