<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once  'application/models/m_login.php';
 
class Blog extends CI_Controller{
    var $em;
    function __construct() {
        parent::__construct();
        $this->load->library("doctrine");
        $this->em = $this->doctrine->em;
    }
    public function index()
    {
        echo "Index   ".APPPATH."models/Blog.ph<br>";
        $blog = new models\Entities\Blog;
       // $users = new models\Entities\Users;
       // $u=$this->em->find('models/Users', 1);
        //$u = $this->em::getTable('User')->find($user_id);
	/* $userTable =  Doctrine_Core::getTable('Users');  
$user = $userTable->find(1);  */
	//echo $u->userLogin;
        //$blog = new APPPATH\models\Blog.php;
        //$rs =$this->em->getRepository('models/Directriz')
          //                  ->getAll(1);
        //echo $blog->finAll();
        $user_id = 1;
        
$u = Doctrine::getTable('Users')->find($user_id);
//echo $u->id;
$blog->setContent(' contenido as ');
$blog->setTitle('tuti lo doctrine');
 
$this->em->persist($blog);
$this->em->flush();
echo "asasa Hola";
        
        /*
        $blog = $this->em->find('Blog', 1);
        echo $blog->title . '<br/>' . $blog->content;*/
    }
}