<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistemas
 *
 * Administracion del inicio de sesion del cualquier usuario que use este sistema
 *
 * @package      Application
 * @author       Gobierno Bolivariano de Aragua
 * @copyright    Copyright (c) 2011 - 2011, Gobierno Bolivariano de Aragua.
 * @link                http://proyector.gob.ve
 * @filesource ./application/controllers/login.php
 */

// ------------------------------------------------------------------------

/**
 * Clase Login
 * 
 * Acciones sobre el logueo del usuario
 * 
 * @package	base
 * @category    base
 * @author	Jean Mendoza
 * @fecha	05-12-2011
 */
class login extends CI_Controller {
    
    function  __construct() {
        parent::__construct();
        $this->load->library("encrypt");
        $this->load->model('m_login');
    }
    
    function index() {
        $this->login_view();

    }//fin index
	    /**
	    *function salir del sistema y destruccion de las sessiones
	    */
    
    function login_view($msgerror='', $msg='') {
        $this->load->view('encabezado_msg');
        $this->load->view('login', array('msgerror' => $msgerror, 'msg' => $msg));
    
    }
    
    function salir() {
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }



//*********************
//fin CI_Controller
//*********************
}
/** End of file login.php */
/** Location: ./application/controllers/login.php */
?>
