<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mao extends CI_Controller {


	public function index()
	{
            $this->load->library("_menu");
            $data['title'] = 'Direccion de Proyectos';
              $data['user'] = $this->session->userdata('userLogin');
              $data['menu'] = $this->_menu->CrearMaquetadoMenu();
              $this->load->vars($data);
          $this->load->view('encabezado_menu');
          echo "asas";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */