<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
            $this->cargar->menu_system("inicio");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */