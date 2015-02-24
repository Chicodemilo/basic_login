<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->form_validation->set_error_delimiters('', '');
        $this->is_logged_in();
        
    }


	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true){
			redirect('login/', 'refresh');
		}
	}



   	public function index($user_id = 0){
        $role = $this->session->userdata('role');
        $id = $this->session->userdata('id');
        $this->load->model('edit_model');
        $resources = $this->edit_model->get_data($id);
        $data = array('resources' => $resources);
        $this->load->view('edit/header.php');
        $this->load->view('edit/edit_page.php');
        $this->load->view('page/footer.php');
    }







}


?>