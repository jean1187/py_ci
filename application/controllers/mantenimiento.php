<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

	public function index()
	{
		$this->cargar->menu_system("mantenimiento");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Mantenimiento.php */