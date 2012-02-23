<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {



public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

public function index()
	{
    $this->load->vars(array('error' => ''));
                $this->cargar->menu_system($this->router->class."/index","loooo");
		//$this->load->view('upload/index', array('error' => ''));
	}
        public function do_upload_()
	{
           
            //error_reporting(E_ALL | E_STRICT);

             
           // $this->upload = new UploadHandler();

            /*header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header('Content-Disposition: inline; filename="files.json"');
            header('X-Content-Type-Options: nosniff');
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
            header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');*/
            
            
//$upload_path_url = base_url().'uploads/';
	
		$config['upload_path'] = FCPATH.'uploads/';
		$config['accept_file_types'] = '(jpg|JPG)';
		$config['max_size'] = '30000';
                $config['script_url'] = current_url();
                //$config['max_number_of_files'] = 2;
                
		
	  	$this->load->library('uploads', $config);
                //echo $_REQUEST['_method']." - ".$_SERVER['REQUEST_METHOD'];
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'OPTIONS':
                    break;
                case 'HEAD':
                case 'GET':
                    $this->uploads->get();
                    break;
                case 'POST':
                            
                    $this->uploads->post();
                
                break;
                 
                case 'DELETE':
                    $this->uploads->delete();
                    break;
                default:
                    header('HTTP/1.1 405 Method Not Allowed');
            }

        }
public function do_upload()
	{
	
	$upload_path_url = base_url().'uploads/';
	
		$config['upload_path'] = FCPATH.'uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '30000';
		
	  	$this->load->library('upload', $config);

	  	if ( ! $this->upload->do_upload())
	  	{
	  		$error = array('error' => $this->upload->display_errors());
	  		$this->load->view('upload/index', $error);
	  	}
	  	else
	  	{ 		
		   $data = $this->upload->data();
		/*	
                  // to re-size for thumbnail images un-comment and set path here and in json array	
		   $config = array(
			'source_image' => $data['full_path'],
			'new_image' => $this->$upload_path_url '/thumbs',
			'maintain_ration' => true,
			'width' => 80,
			'height' => 80
		  );
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		*/
	//set the data for the json array	
	$info->name = $data['file_name'];
        $info->size = $data['file_size'];
	$info->type = $data['file_type'];
        $info->url = $upload_path_url .$data['file_name'];
	$info->thumbnail_url = $upload_path_url .$data['file_name'];//I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
        $info->delete_url = base_url().'upload/deleteImage/'.$data['file_name'];
        $info->delete_type = 'DELETE';
          

	if (IS_AJAX) {   //this is why we put this in the constants to pass only json data
	           echo json_encode(array($info));
                    //this has to be the only the only data returned or you will get an error.
                    //if you don't give this a json array it will give you a Empty file upload result error
                    //it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
                      }
	else {   // so that this will still work if javascript is not enabled
		  	$file_data['upload_data'] = $this->upload->data();
		  	$this->load->view('upload/upload_success', $file_data);
		}
					
	 }

}
	

public function deleteImage($file)//gets the job done but you might want to add error checking and security
	{
		$success =unlink(FCPATH.'uploads/' .$file);
		//info to see if it is doing what it is supposed to	
		$info->sucess =$success;
		$info->path =base_url().'uploads/' .$file;
		$info->file =is_file(FCPATH.'uploads/' .$file);
	if (IS_AJAX) {//I don't think it matters if this is set but good for error checking in the console/firebug
	    echo json_encode(array($info));}
	else {     //here you will need to decide what you want to show for a successful delete
		  	$file_data['delete_data'] = $file;
		  	$this->load->view('upload/delete_success', $file_data); 
	       }
         }//fin deleteImage
         
}//fin class          
         